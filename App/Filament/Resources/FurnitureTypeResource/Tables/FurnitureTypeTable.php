<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\FurnitureTypeResource\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Property\App\Filament\Resources\FurnitureTypeResource\Tables\Actions\FurnitureTypeAction;
use Modules\Property\App\Filament\Resources\FurnitureTypeResource\Tables\BulkActions\FurnitureTypeBulkAction;
use Modules\Property\App\Filament\Resources\FurnitureTypeResource\Tables\Filters\FurnitureTypeFilter;

class FurnitureTypeTable
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
            ->filters(FurnitureTypeFilter::filter())
            ->actions(FurnitureTypeAction::action())
            ->bulkActions(FurnitureTypeBulkAction::bulkActions());
    }
}