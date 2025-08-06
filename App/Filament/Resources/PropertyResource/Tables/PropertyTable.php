<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\PropertyResource\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Modules\Property\App\Models\Property;

class PropertyTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('main_image')
                    ->label(__('property::property.table.columns.main_image'))
                    ->collection('main_image')
                    ->conversion('thumb')
                    ->size(50)
                    ->defaultImageUrl(asset('images/placeholder.png')),
                TextColumn::make('name')
                    ->label(__('property::property.table.columns.name'))
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url')
                    ->label(__('property::property.table.columns.url'))
                    ->getStateUsing(function (Property $record): string {
                        return url("/bat-dong-san/{$record->slug}");
                    })
                    ->copyable()
                    ->wrap()
                    ->openUrlInNewTab(),
                SpatieTagsColumn::make('tags')
                    ->label(__('property::property.table.columns.tags'))
                    ->type('property_tags')
                    ->colors(['secondary']),
                TextColumn::make('categories.name')
                    ->label(__('property::property.table.columns.categories'))
                    ->searchable(),
                TextColumn::make('createdBy.name')
                    ->label(__('property::property.table.columns.created_by'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('total_price')
                    ->label(__('property::property.table.columns.total_price'))
                    ->money('VND')
                    ->sortable(),
                TextColumn::make('price_per_m2')
                    ->label(__('property::property.table.columns.price_per_m2'))
                    ->money('VND')
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label(__('property::property.table.columns.is_active'))
                    ->tooltip(function ($record) {
                        return $record->is_active ? __('property::property.table.tooltips.active') : __('property::property.table.tooltips.inactive');
                    })
                    ->onIcon('heroicon-s-check-circle')
                    ->offIcon('heroicon-s-x-circle')
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label(__('property::property.table.columns.created_at'))
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->actions([
                \Filament\Tables\Actions\EditAction::make(),
                \Filament\Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
