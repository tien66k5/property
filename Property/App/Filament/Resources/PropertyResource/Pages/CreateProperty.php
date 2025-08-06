<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PropertyResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Property\App\Filament\Resources\PropertyResource;
use Modules\Property\App\Models\Category;

class CreateProperty extends CreateRecord
{
    protected static string $resource = PropertyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $categoryIds = $data['categories'] ?? [];
        $this->categoriesToAttach = Category::whereIn('id', $categoryIds)->get();
        unset($data['categories']);
        return $data;
    }

    protected function afterCreate(): void
    {
        $this->record->categories()->sync($this->categoriesToAttach->pluck('id')->toArray());
    }
}