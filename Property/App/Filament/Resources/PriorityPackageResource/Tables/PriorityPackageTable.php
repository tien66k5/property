<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PriorityPackageResource\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Property\App\Filament\Resources\PriorityPackageResource\Tables\Actions\PriorityPackageAction;
use Modules\Property\App\Filament\Resources\PriorityPackageResource\Tables\BulkActions\PriorityPackageBulkAction;
use Modules\Property\App\Filament\Resources\PriorityPackageResource\Tables\Filters\PriorityPackageFilter;

class PriorityPackageTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Ngày thêm')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters(PriorityPackageFilter::filter())
            ->actions(PriorityPackageAction::action())
            ->bulkActions(PriorityPackageBulkAction::bulkActions());
    }
}