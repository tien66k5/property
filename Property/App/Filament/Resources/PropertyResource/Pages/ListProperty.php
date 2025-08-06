<?php

namespace Modules\Property\App\Filament\Resources\PropertyResource\Pages;

use Modules\Property\App\Filament\Resources\PropertyResource;
use Filament\Resources\Pages\ListRecords;

class ListProperty extends ListRecords
{
    protected static string $resource = PropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}