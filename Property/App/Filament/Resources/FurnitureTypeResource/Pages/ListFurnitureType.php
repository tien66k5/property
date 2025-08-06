<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\FurnitureTypeResource\Pages;

use Modules\Property\App\Filament\Resources\FurnitureTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFurnitureType extends ListRecords
{
    protected static string $resource = FurnitureTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Thêm giấy tờ pháp lý'),
        ];
    }
}
