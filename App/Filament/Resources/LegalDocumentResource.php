<?php

namespace Modules\Property\App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\{TextInput, Textarea, Section, Grid};
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Property\App\Models\LegalDocument;
use Illuminate\Support\Str;
use Modules\Property\App\Filament\Resources\LegalDocumentResource\Pages;

class LegalDocumentResource extends Resource
{
    protected static ?string $model = LegalDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Giấy tờ pháp lý';

    protected static ?string $navigationGroup = 'Cấu hình bất động sản';

    protected static ?string $modelLabel = 'Giấy tờ pháp lý';



    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Section::make('Thông tin giấy tờ pháp lý')
                    ->description('Thêm, sửa, xóa các loại giấy tờ pháp lý như Sổ đỏ, Chưa có giấy.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Tên giấy tờ')
                                ->required()
                                ->maxLength(255)
                                ->placeholder('Ví dụ: Sổ đỏ')
                                ->afterStateUpdated(function (Forms\Set $set, ?string $state) {
                                    $set('slug', Str::slug($state));
                                }),

                            // TextInput::make('document_type')
                            //     ->label('Loại tài liệu')
                            //     ->maxLength(255)
                            //     ->placeholder('Ví dụ: Giấy chứng nhận'),

                            Textarea::make('description')
                                ->label('Mô tả')
                                ->maxLength(1000)
                                ->placeholder('Nhập mô tả chi tiết'),
                        ]),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Tên')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('document_type')
                    ->label('Loại tài liệu')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegalDocument::route('/'),
            'create' => Pages\CreateLegalDocument::route('/create'),
            'edit' => Pages\EditLegalDocument::route('/{record}/edit'),
        ];
    }
}
