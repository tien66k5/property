<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources;

use Modules\Property\App\Filament\Resources\PropertyResource\Forms\PropertyForm;
use Modules\Property\App\Filament\Resources\PropertyResource\Pages;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Modules\Property\App\Filament\Resources\PropertyResource\Tables\PropertyTable;
use Modules\Property\App\Models\Property;
use Illuminate\Support\Facades\Auth;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function getNavigationGroup(): ?string
    {
        return __('property::property.resource.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('property::property.resource.navigation_label');
    }

    public static function getModelLabel(): string
    {
        return __('property::property.resource.model_label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('property::property.resource.plural_model_label');
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return PropertyForm::form($form);
    }

    public static function table(Table $table): Table
    {
        return PropertyTable::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperty::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }

    public static function getValidationRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:properties,slug'],
            'status' => ['required', 'in:draft,published,hidden'],
            'transaction_type' => ['nullable', 'in:ban,thue'],
            'total_price' => ['required', 'numeric', 'min:0'],
            'area' => ['nullable', 'numeric', 'min:0'],
            'price_per_m2' => ['nullable', 'numeric', 'min:0'],
            'categories' => ['required', 'array', 'min:1'],
            'image_main' => ['required', 'array', 'min:1', 'max:1'],
            'gallery' => ['nullable', 'array', 'max:8'],
            'documents' => ['nullable', 'array', 'max:5'],
            'og_image' => ['nullable', 'array', 'max:1'],
            'created_by' => ['required', 'exists:users,id'],
            'legal_document_id' => ['nullable', 'exists:legal_documents,id'],
            'province_id' => ['nullable', 'exists:provinces,id'],
            'district_id' => ['nullable', 'exists:districts,id'],
            'ward_id' => ['nullable', 'exists:wards,id'],
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['created_by'] = Auth::id();
        return $data;
    }

    protected function mutateFormDataBeforeUpdate(array $data): array
    {
        // $data['created_by'] = $this->record->created_by;
        return $data;
    }
}
