<?php
declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PriorityPackageResource\Pages;

use Modules\Property\App\Filament\Resources\PriorityPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPriorityPackage extends EditRecord
{
    protected static string $resource = PriorityPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
// declare(strict_types=1);

// namespace Modules\Property\App\Filament\Resources\PriorityPackageResource\Pages;

// use Modules\Property\App\Filament\Resources\PriorityPackageResource;
// use Filament\Actions;
// use Filament\Resources\Pages\EditRecord;

// class EditPriorityPackage extends EditRecord
// {
//     protected static string $resource = PriorityPackageResource::class;

//     protected function getHeaderActions(): array
//     {
//         return [
//             Actions\DeleteAction::make(),
//         ];
//     }
// }