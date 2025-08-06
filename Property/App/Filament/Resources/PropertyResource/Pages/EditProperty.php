<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PropertyResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Modules\Property\App\Filament\Resources\PropertyResource;
use Modules\Property\App\Models\Category;

class EditProperty extends EditRecord
{
    protected static string $resource = PropertyResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $categoryIds = $data['categories'] ?? [];
        $this->categoriesToAttach = Category::whereIn('id', $categoryIds)->get();
        unset($data['categories']);
        return $data;
    }

    protected function afterSave(): void
    {
        $this->record->categories()->sync($this->categoriesToAttach->pluck('id')->toArray());
    }
}