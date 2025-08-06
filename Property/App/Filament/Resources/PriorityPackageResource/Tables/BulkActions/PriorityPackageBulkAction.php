<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PriorityPackageResource\Tables\BulkActions;

use Filament\Tables;

class PriorityPackageBulkAction
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