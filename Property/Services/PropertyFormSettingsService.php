<?php

namespace Modules\Property\Services;

use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Section;
use Modules\Property\App\Models\PropertyFormSetting;
use Illuminate\Support\Facades\Cache;

class PropertyFormSettingsService
{
    private const CACHE_DURATION = 3600;
    private const CACHE_KEY_PREFIX = 'property_form_settings_';

    private const DEFAULT_SETTINGS = [
        'basic' => [
            'name' => true,
            'slug' => true,
            'status' => true,
            'transaction_type' => true,
            'total_price' => true,
            'price_per_m2' => true,
            'area' => true,
            'address' => true,
            'street_name' => true,
            'legal_document_id' => true,
            'bedrooms' => true,
            'bathrooms' => true,
            'floors' => true,
            'direction' => true,
            'build_year' => true,
            'latitude' => true,
            'longitude' => true,
            'is_active' => true,
            'province_id' => true,
            'district_id' => true,
            'ward_id' => true,
            'short_description' => true,
            'description' => true,
        ],
        'media' => [
            'image_main' => true,
            'gallery' => true,
            'documents' => true,
        ],
        'categories' => [
            'categories' => true,
            'tags' => true,
        ],
        'seo' => [
            'meta_title' => true,
            'meta_description' => true,
            'meta_keywords' => true,
            'og_data' => true,
        ],
    ];

    private function getCacheKey(string $section, string $field): string 
    {
        return self::CACHE_KEY_PREFIX . "{$section}_{$field}_" . auth()->id();
    }

    public function getFieldSetting(string $section, string $field): bool
    {
        return Cache::remember(
            $this->getCacheKey($section, $field), 
            self::CACHE_DURATION, 
            fn() => PropertyFormSetting::where([
                'user_id' => auth()->id(),
                'section' => $section,
                'field' => $field,
            ])->first()?->is_enabled ?? self::DEFAULT_SETTINGS[$section][$field] ?? true
        );
    }

    public function updateFieldSetting(string $section, string $field, bool $state): void
    {
        PropertyFormSetting::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'section' => $section,
                'field' => $field,
            ],
            ['is_enabled' => $state]
        );

        Cache::forget($this->getCacheKey($section, $field));
    }

    public function isSectionEnabled(string $section): bool
    {
        $settings = PropertyFormSetting::where([
            'user_id' => auth()->id(),
            'section' => $section,
        ])->get();

        return $settings->isEmpty()
            ? collect(self::DEFAULT_SETTINGS[$section])->every(fn($value) => $value)
            : $settings->every(fn($setting) => $setting->is_enabled);
    }

    public function toggleAll(bool $state, $livewireComponent = null): void
    {
        $userId = auth()->id();

        PropertyFormSetting::where('user_id', $userId)->update(['is_enabled' => $state]);

        foreach (self::DEFAULT_SETTINGS as $section => $fields) {
            foreach ($fields as $field => $_) {
                Cache::forget($this->getCacheKey($section, $field));
            }
        }

        if ($livewireComponent && method_exists($livewireComponent, 'set')) {
            foreach (self::DEFAULT_SETTINGS as $section => $fields) {
                foreach ($fields as $field => $_) {
                    $livewireComponent->set("show_{$section}_{$field}", $state);
                }
            }
        }
    }

    public function createGlobalActions(): Section
    {
        return Section::make(__('property::property.form.sections.global_actions'))
            ->schema([
                Actions::make([
                    Action::make('toggle_all')
                        ->label(fn() => $this->areAllFieldsEnabled()
                            ? __('property::property.form.actions.disable_all')
                            : __('property::property.form.actions.enable_all'))
                        ->color(fn() => $this->areAllFieldsEnabled() ? 'danger' : 'success')
                        ->icon('heroicon-o-adjustments-horizontal')
                        ->action(function ($livewire) {
                            $this->toggleAll(!$this->areAllFieldsEnabled(), $livewire);
                        }),

                    Action::make('reset_defaults')
                        ->label(__('property::property.form.actions.reset_defaults'))
                        ->color('warning')
                        ->icon('heroicon-o-arrow-path')
                        ->requiresConfirmation()
                        ->action(fn($livewire) => $this->resetToDefaults($livewire)),
                ])
            ])
            ->collapsible();
    }

    public function resetToDefaults($livewireComponent = null): void
    {
        PropertyFormSetting::where('user_id', auth()->id())->delete();
        
        foreach (self::DEFAULT_SETTINGS as $section => $fields) {
            foreach ($fields as $field => $defaultValue) {
                Cache::forget($this->getCacheKey($section, $field));
                
                if ($livewireComponent && method_exists($livewireComponent, 'set')) {
                    $livewireComponent->set("show_{$section}_{$field}", $defaultValue);
                }
            }
        }
    }

    public function createSettingsGroup(string $title, string $section, array $fields): Section
    {
        $schema = [
            Actions::make([
                Action::make("toggle_section_{$section}")
                    ->label(fn() => $this->isSectionEnabled($section)
                        ? __('property::property.form.actions.disable_section')
                        : __('property::property.form.actions.enable_section'))
                    ->color(fn() => $this->isSectionEnabled($section) ? 'danger' : 'success')
                    ->icon('heroicon-o-adjustments-horizontal')
                    ->action(function ($livewire) use ($section, $fields) {
                        $newState = !$this->isSectionEnabled($section);
                        foreach ($fields as $field => $_) {
                            $this->updateFieldSetting($section, $field, $newState);
                            if (method_exists($livewire, 'set')) {
                                $livewire->set("show_{$section}_{$field}", $newState);
                            }
                        }
                    })
            ])
        ];

        foreach ($fields as $field => $label) {
            $schema[] = Checkbox::make("show_{$section}_{$field}")
                ->label($label)
                ->default(fn() => $this->getFieldSetting($section, $field))
                ->live()
                ->afterStateUpdated(function ($state) use ($section, $field) {
                    $this->updateFieldSetting($section, $field, $state);
                });
        }

        return Section::make($title)
            ->schema($schema)
            ->compact()
            ->columns(2)
            ->collapsible();
    }

    public function areAllFieldsEnabled(): bool
    {
        $settings = PropertyFormSetting::where('user_id', auth()->id())->get();

        if ($settings->isEmpty()) {
            return collect(self::DEFAULT_SETTINGS)
                ->flatten(1)
                ->every(fn($value) => $value);
        }

        return $settings->every(fn($setting) => $setting->is_enabled);
    }

    public function clearFieldCache(string $section, string $field): void
    {
        Cache::forget("property_form_settings_{$section}_{$field}_" . auth()->id());
    }
}