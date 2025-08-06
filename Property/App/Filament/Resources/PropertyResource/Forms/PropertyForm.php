<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PropertyResource\Forms;

use Filament\Forms;
use Filament\Forms\Components\{TextInput, Select, Toggle, Textarea, RichEditor, Grid, Tabs, Section, Split, Group, Repeater};
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Support\Enums\ActionSize;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms\Components\SpatieTagsInput;
use TomatoPHP\FilamentMediaManager\Form\MediaManagerInput;
use Modules\Property\Services\PropertyFormSettingsService;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Modules\Category\Enums\CategoryStatus;
use Illuminate\Support\Facades\Log;
use Modules\Property\App\Models\PriorityPackage;
use Modules\Payment\Traits\GHNServiceTrait;
use Carbon\Carbon;

class PropertyForm
{
    use GHNServiceTrait;
    private static PropertyFormSettingsService $settingsService;

    public static function form(Forms\Form $form): Forms\Form
    {
        self::$settingsService = app(PropertyFormSettingsService::class);

        return $form->schema([
            Tabs::make('property_tabs')
                ->tabs([
                    self::createBasicInfoTab(),
                    self::createMediaTab(),
                    self::createPriorityAndFurnitureTab(),
                ])
                ->activeTab(1)
                ->persistTabInQueryString()
                ->columnSpanFull()
        ])->columns(3);
    }
    private static function createBasicInfoTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('property::property.form.tabs.basic'))
            ->icon('heroicon-o-information-circle')
            ->schema([
                Split::make([
                    Group::make([
                        Section::make(__('property::property.form.sections.basic'))
                            ->description(__('property::property.form.sections.basic_description'))
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('name')
                                        ->label(__('property::property.form.fields.name'))
                                        ->required()
                                        ->live(onBlur: true)
                                        ->maxLength(255)
                                        ->autocomplete()
                                        ->placeholder(__('property::property.form.placeholders.name'))
                                        ->suffixAction(
                                            Action::make('generateSlug')
                                                ->icon('heroicon-m-arrow-path')
                                                ->tooltip(__('property::property.form.actions.generate_slug'))
                                                ->size(ActionSize::Small)
                                                ->action(fn(Set $set, $state) => $set('slug', Str::slug($state)))
                                        )
                                        ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'name'))
                                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                            $set('slug', Str::slug($state));
                                            $set('meta_title', $state);
                                        }),

                                    TextInput::make('slug')
                                        ->label(__('property::property.form.fields.slug'))
                                        ->required()
                                        ->unique(ignoreRecord: true)
                                        ->maxLength(255)
                                        ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'slug')),

                                    Select::make('transaction_type')
                                        ->label(__('property::property.form.fields.transaction_type'))
                                        ->options([
                                            'ban' => __('property::property.form.transaction_types.sale'),
                                            'thue' => __('property::property.form.transaction_types.rent'),
                                        ])
                                        ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'transaction_type')),

                                    TextInput::make('total_price')
                                        ->label('Tổng giá')
                                        ->numeric()
                                        ->suffix(' VND')
                                        ->reactive()
                                        ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                            $area = $get('area');
                                            if ($area && $area > 0) {
                                                $set('price_per_m2', round($state / $area));
                                            }
                                        }),

                                    TextInput::make('area')
                                        ->label('Diện tích')
                                        ->numeric()
                                        ->suffix(' m²')
                                        ->reactive()
                                        ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                            $totalPrice = $get('total_price');
                                            if ($state && $state > 0 && $totalPrice) {
                                                $set('price_per_m2', round($totalPrice / $state));
                                            }
                                        }),

                                    TextInput::make('price_per_m2')
                                        ->label('Giá/m²')
                                        ->numeric()
                                        ->suffix(' VND/m²')
                                        ->disabled(),

                                    Forms\Components\Select::make('categories')
                                        ->label(__('property::property.form.label.categories'))
                                        ->relationship(
                                            name: 'categories',
                                            titleAttribute: 'name',
                                            modifyQueryUsing: fn($query) => $query->where(function ($q) {
                                                $q->where('category_type', 'product')->orWhereNull('category_type');
                                            })->where('status', CategoryStatus::ACTIVE)
                                        )
                                        ->multiple()
                                        ->required()
                                        ->preload()
                                        ->visible(fn() => self::$settingsService->getFieldSetting('categories', 'categories'))
                                        ->helperText(__('property::property.form.helper_text.categories'))
                                        ->hintIcon('heroicon-m-question-mark-circle'),

                                    Forms\Components\Select::make('tags')
                                        ->label(__('property::property.form.label.tags'))
                                        ->options(function () {
                                            return \Spatie\Tags\Tag::where('type', 'property_tags')
                                                ->get()
                                                ->mapWithKeys(function ($tag) {
                                                    $name = is_array($tag->name) && isset($tag->name['']) ? $tag->name[''] : $tag->name;
                                                    return [$name => $name];
                                                });
                                        })
                                        ->multiple()
                                        ->saveRelationshipsUsing(function ($component, $record) {
                                            if ($record instanceof \Modules\Property\App\Models\Property) {
                                                $state = $component->getState() ?? [];
                                                $tags = collect($state)->filter()->unique()->toArray();
                                                $record->syncTagsWithType($tags, 'property_tags');
                                            }
                                        })
                                        ->dehydrated(true)
                                        ->visible(fn() => self::$settingsService->getFieldSetting('categories', 'tags'))
                                        ->helperText(__('property::property.form.helper_text.tags'))
                                        ->placeholder(__('property::property.form.placeholder.tags')),
                                ]),
                            ]),
                    ])->columnSpan(1),

                    Group::make([
                        Section::make(__('property::property.form.sections.description'))
                            ->description(__('property::property.form.sections.description_description'))
                            ->collapsible()
                            ->schema([
                                Textarea::make('short_description')
                                    ->label(__('property::property.form.fields.short_description'))
                                    ->maxLength(500)
                                    ->hintColor('gray')
                                    ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'short_description')),

                                RichEditor::make('description')
                                    ->label(__('property::property.form.fields.description'))
                                    ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'description')),
                            ]),
                    ])->columnSpan(1),
                ])->from('md'),

                Section::make(__('property::property.form.sections.location'))
                    ->collapsible()
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('address')
                                ->label(__('property::property.form.fields.address'))
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'address')),

                            TextInput::make('street_name')
                                ->label(__('property::property.form.fields.street_name'))
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'street_name')),
                                Grid::make(1)->schema([]),

                            Select::make('province_id')
                                ->label(__('property::property.form.fields.province'))
                                ->options(fn() => collect((new static)->fetchProvincesGHN())
                                    ->pluck('ProvinceName', 'ProvinceID')->toArray())
                                ->searchable()
                                ->reactive()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'province_id'))
                                ->afterStateUpdated(function (Set $set) {
                                    $set('district_id', null);
                                    $set('ward_id', null);
                                }),

                            Select::make('district_id')
                                ->label(__('property::property.form.fields.district'))
                                ->options(function (Get $get) {
                                    if (!$get('province_id')) return [];
                                    return collect((new static)->fetchDistrictsGHN($get('province_id')))
                                        ->pluck('DistrictName', 'DistrictID')->toArray();
                                })
                                ->searchable()
                                ->reactive()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'district_id'))
                                ->afterStateUpdated(fn(Set $set) => $set('ward_id', null)),

                            Select::make('ward_id')
                                ->label(__('property::property.form.fields.ward'))
                                ->options(function (Get $get) {
                                    if (!$get('district_id')) return [];
                                    return collect((new static)->fetchWardsGHN($get('district_id')))
                                        ->pluck('WardName', 'WardCode')->toArray();
                                })
                                ->searchable()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'ward_id')),

                            TextInput::make('latitude')
                                ->label(__('property::property.form.fields.latitude'))
                                ->numeric()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'latitude')),

                            TextInput::make('longitude')
                                ->label(__('property::property.form.fields.longitude'))
                                ->numeric()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'longitude')),
                        ]),
                    ])->columnSpanFull(),

                Section::make(__('property::property.form.sections.details'))
                    ->description(__('property::property.form.sections.details_description'))
                    ->collapsible()
                    ->schema([
                        Grid::make(4)->schema([
                            Select::make('legal_document_id')
                                ->label(__('property::property.form.fields.legal_document'))
                                ->relationship('legalDocument', 'name')
                                ->searchable()
                                ->preload()
                                ->required()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'legal_document_id')),

                            TextInput::make('bedrooms')
                                ->label(__('property::property.form.fields.bedrooms'))
                                ->numeric()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'bedrooms')),

                            TextInput::make('bathrooms')
                                ->label(__('property::property.form.fields.bathrooms'))
                                ->numeric()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'bathrooms')),

                            TextInput::make('floors')
                                ->label(__('property::property.form.fields.floors'))
                                ->numeric()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'floors')),

                            TextInput::make('direction')
                                ->label(__('property::property.form.fields.direction'))
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'direction')),

                            TextInput::make('build_year')
                                ->label(__('property::property.form.fields.build_year'))
                                ->numeric()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'build_year')),

                            Toggle::make('is_active')
                                ->label(__('property::property.form.fields.is_active'))
                                ->default(true)
                                ->onIcon('heroicon-s-check-circle')
                                ->offIcon('heroicon-s-x-circle')
                                ->onColor('success')
                                ->offColor('danger')
                                ->inline()
                                ->visible(fn() => self::$settingsService->getFieldSetting('basic', 'is_active')),
                        ]),
                    ])->columnSpanFull(),

                Grid::make(2)->schema([
                    Section::make(__('property::property.form.sections.furniture'))
                        ->description(__('property::property.form.sections.furniture_description'))
                        ->schema([
                            Repeater::make('propertyFurnitures')
                                ->label(__('property::property.form.fields.furniture_types'))
                                ->relationship()
                                ->schema([
                                    Select::make('furniture_type_id')
                                        ->label(__('property::property.form.fields.furniture_type'))
                                        ->relationship('furnitureType', 'name')
                                        ->required()
                                        ->searchable()
                                        ->preload()
                                        ->placeholder(__('property::property.form.placeholders.furniture_type')),
                                    TextInput::make('quantity')
                                        ->label(__('property::property.form.fields.quantity'))
                                        ->numeric()
                                        ->required()
                                        ->minValue(1),
                                ])
                                ->saveRelationshipsUsing(function ($component, $record, $state) {
                                    if (!$record || !$state) {
                                        return;
                                    }
                                    $record->propertyFurnitures()->delete();
                                    foreach ($state as $item) {
                                        if (
                                            isset($item['furniture_type_id'], $item['quantity']) &&
                                            is_numeric($item['furniture_type_id']) &&
                                            is_numeric($item['quantity'])
                                        ) {
                                            $record->propertyFurnitures()->create([
                                                'furniture_type_id' => $item['furniture_type_id'],
                                                'quantity' => $item['quantity'],
                                            ]);
                                        }
                                    }
                                })
                                ->collapsible()
                                ->visible(fn() => self::$settingsService->getFieldSetting('priority_and_furniture', 'furniture_types')),
                        ])
                        ->collapsible()
                        ->columnSpan(1),

                    Section::make(__('property::property.form.fields.custom_furnitures'))
                        ->description(__('property::property.form.sections.furniture_description'))
                        ->schema([
                            Repeater::make('customFurnitures')
                                ->label(__('property::property.form.fields.custom_furnitures'))
                                ->relationship()
                                ->schema([
                                    TextInput::make('name')
                                        ->label(__('property::property.form.fields.custom_furniture_name'))
                                        ->placeholder(__('property::property.form.placeholders.custom_furniture_name')),
                                    TextInput::make('quantity')
                                        ->label(__('property::property.form.fields.quantity'))
                                        ->numeric()
                                        ->minValue(1),
                                ])
                                ->saveRelationshipsUsing(function ($component, $record, $state) {
                                    if (!$record || !$state) {
                                        return;
                                    }
                                    $record->customFurnitures()->delete();
                                    foreach ($state as $item) {
                                        if (
                                            isset($item['name'], $item['quantity']) &&
                                            !empty($item['name']) &&
                                            is_numeric($item['quantity'])
                                        ) {
                                            $record->customFurnitures()->create([
                                                'name' => $item['name'],
                                                'quantity' => $item['quantity'],
                                            ]);
                                        }
                                    }
                                })
                                ->collapsible()
                                ->visible(fn() => self::$settingsService->getFieldSetting('priority_and_furniture', 'custom_furnitures')),
                        ])
                        ->collapsible()
                        ->columnSpan(1),
                ]),
            ]);
    }
    private static function createMediaTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('property::property.form.tabs.media'))
            ->icon('heroicon-o-photo')
            ->schema([
                Section::make(__('property::property.form.sections.media'))
                    ->description(__('property::property.form.sections.media_description'))
                    ->collapsible()
                    ->schema([
                        MediaManagerInput::make('image_main')
                            ->label(__('property::property.form.fields.image_main'))
                            ->helperText(__('property::property.form.placeholders.image_main'))
                            ->required()
                            ->schema([])
                            ->defaultItems(1)
                            ->minItems(1)
                            ->maxItems(1)
                            ->visible(fn() => self::$settingsService->getFieldSetting('media', 'image_main')),

                        // MediaManagerInput::make('gallery')
                        //     ->label(__('property::property.form.fields.gallery'))
                        //     ->helperText(__('property::property.form.placeholders.gallery'))
                        //     ->reorderable()
                        //     ->schema([])
                        //     ->defaultItems(0)
                        //     ->minItems(0)
                        //     ->maxItems(8)
                        //     ->grid(2)
                        //     ->visible(fn() => self::$settingsService->getFieldSetting('media', 'gallery')),

                        // MediaManagerInput::make('documents')
                        //     ->label(__('property::property.form.fields.documents'))
                        //     ->helperText(__('property::property.form.placeholders.documents'))
                        //     ->schema([])
                        //     ->defaultItems(0)
                        //     ->minItems(0)
                        //     ->maxItems(5)
                        //     ->visible(fn() => self::$settingsService->getFieldSetting('media', 'documents')),
                    ]),
            ]);
    }



    private static function createPriorityAndFurnitureTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('property::property.form.tabs.priority_and_furniture'))
            ->icon('heroicon-o-star')
            ->schema([
                Section::make(__('property::property.form.sections.priority'))
                    ->description(__('property::property.form.sections.priority_description'))
                    ->collapsible()
                    ->schema([
                        Grid::make(2)->schema([
                            Repeater::make('productPriorities')
                                ->label(__('property::property.form.fields.priority_packages'))
                                ->relationship()
                                ->schema([
                                    Select::make('priority_package_id')
                                        ->label(__('property::property.form.fields.priority_package'))
                                        ->relationship('priorityPackage', 'name')
                                        ->options(
                                            PriorityPackage::where('is_old', false)
                                                ->pluck('name', 'id')
                                        )
                                        ->required()
                                        ->searchable()
                                        ->preload()
                                        ->placeholder(__('property::property.form.placeholders.priority_package')),
                                    TextInput::make('duration_days')
                                        ->label(__('property::property.form.fields.priority_duration_days'))
                                        ->numeric()
                                        ->required()
                                        ->minValue(1)
                                        ->suffix(' ngày')
                                        ->reactive()
                                        ->afterStateUpdated(function ($state, callable $set, Get $get) {
                                            $startDate = $get('start_date');
                                            if ($startDate && $state) {
                                                $endDate = \Carbon\Carbon::parse($startDate)->addDays($state);
                                                $set('end_date', $endDate->toDateString());
                                            }
                                        }),
                                    Forms\Components\DatePicker::make('start_date')
                                        ->label(__('property::property.form.fields.priority_start_date'))
                                        ->required()
                                        ->reactive()
                                        ->minDate(Carbon::today())
                                        ->afterStateUpdated(function ($state, callable $set, Get $get) {
                                            $duration = $get('duration_days');
                                            if ($state && $duration) {
                                                $endDate = \Carbon\Carbon::parse($state)->addDays($duration);
                                                $set('end_date', $endDate->toDateString());
                                            }
                                        }),
                                    Forms\Components\DatePicker::make('end_date')
                                        ->label(__('property::property.form.fields.priority_end_date'))
                                        ->disabled()
                                        ->required(),
                                ])
                                ->saveRelationshipsUsing(function ($component, $record, $state) {
                                    if (!$record || !$state) {
                                        return;
                                    }
                                    $record->productPriorities()->delete();
                                    foreach ($state as $item) {
                                        if (
                                            isset($item['priority_package_id'], $item['duration_days'], $item['start_date'], $item['end_date']) &&
                                            is_numeric($item['priority_package_id']) &&
                                            is_numeric($item['duration_days'])
                                        ) {
                                            $record->productPriorities()->create([
                                                'priority_package_id' => $item['priority_package_id'],
                                                'start_date' => $item['start_date'],
                                                'end_date' => $item['end_date'],
                                            ]);
                                        }
                                    }
                                })
                                ->collapsible()
                                ->visible(fn() => self::$settingsService->getFieldSetting('priority_and_furniture', 'priority_packages')),
                        ]),
                    ]),


            ]);
    }
}
