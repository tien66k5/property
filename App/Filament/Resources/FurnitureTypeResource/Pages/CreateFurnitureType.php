<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\FurnitureTypeResource\Pages;

use Modules\Property\App\Filament\Resources\FurnitureTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFurnitureType extends CreateRecord
{
    protected static string $resource = FurnitureTypeResource::class;
}