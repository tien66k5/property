<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PriorityPackageResource\Pages;

use Modules\Property\App\Filament\Resources\PriorityPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPriorityPackage extends ListRecords
{
    protected static string $resource = PriorityPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Thêm gói ưu tiên'),
        ];
    }
}

// namespace Modules\Property\App\Filament\Resources\PriorityPackageResource\Pages;

// use Filament\Resources\Pages\ListRecords;
// use Filament\Actions\CreateAction;
// use Modules\Property\App\Filament\Resources\PriorityPackageResource;

// class ListPriorityPackage extends ListRecords
// {
//     protected static string $resource = PriorityPackageResource::class;

//     protected function getHeaderActions(): array
//     {
//         return [
//             CreateAction::make()
//                 ->label('Thêm gói ưu tiên'),
//         ];
//     }
// }