<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\FurnitureTypeResource\Tables\BulkActions;

use Filament\Tables;

class FurnitureTypeBulkAction
{
    public static function bulkActions(): array
    {
        return [
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make()
            ]),
        ];
    }
}