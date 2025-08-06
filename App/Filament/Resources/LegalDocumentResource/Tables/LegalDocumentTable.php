<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\LegalDocumentResource\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Property\App\Filament\Resources\LegalDocumentResource\Tables\Actions\LegalDocumentAction;
use Modules\Property\App\Filament\Resources\LegalDocumentResource\Tables\BulkActions\LegalDocumentBulkAction;
use Modules\Property\App\Filament\Resources\LegalDocumentResource\Tables\Filters\LegalDocumentFilter;

class LegalDocumentTable
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
            ->filters(LegalDocumentFilter::filter())
            ->actions(LegalDocumentAction::action())
            ->bulkActions(LegalDocumentBulkAction::bulkActions());
    }
}