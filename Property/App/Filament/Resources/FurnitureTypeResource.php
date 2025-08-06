<?php


namespace Modules\Property\App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\{TextInput, Textarea, Section, Grid};
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Property\App\Models\FurnitureType;
use Illuminate\Support\Str;
use Modules\Property\App\Filament\Resources\FurnitureTypeResource\Pages;

class FurnitureTypeResource extends Resource
{
    protected static ?string $model = FurnitureType::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Loại nội thất';

    protected static ?string $navigationGroup = 'Cấu hình bất động sản';

    protected static ?string $modelLabel = 'Loại nội thất';

    

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Section::make('Thông tin loại nội thất')
                    ->description('Thêm, sửa, xóa các loại nội thất cơ bản như Bếp, Tủ lạnh.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Tên nội thất')
                                ->required()
                                ->maxLength(255)
                                ->placeholder('Ví dụ: Bếp'),

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
            'index' => Pages\ListFurnitureType::route('/'),
            'create' => Pages\CreateFurnitureType::route('/create'),
            'edit' => Pages\EditFurnitureType::route('/{record}/edit'),
        ];
    }
}

// namespace Modules\Property\App\Filament\Resources;

// use Filament\Forms;
// use Filament\Forms\Components\{TextInput, Textarea, Section, Grid};
// use Filament\Resources\Resource;
// use Filament\Tables;
// use Filament\Tables\Columns\TextColumn;
// use Filament\Tables\Table;
// use Modules\Property\App\Models\FurnitureType;
// use Illuminate\Support\Str;
// use Modules\Property\App\Filament\Resources\FurnitureTypeResource\Pages;

// class FurnitureTypeResource extends Resource
// {
//     protected static ?string $model = FurnitureType::class;

//     protected static ?string $navigationIcon = 'heroicon-o-home';

//     protected static ?string $navigationLabel = 'Loại nội thất';

//     protected static ?string $navigationGroup = 'Cấu hình bất động sản';

//     protected static ?string $modelLabel = 'Loại nội thất';

  

//     public static function form(Forms\Form $form): Forms\Form
//     {
//         return $form
//             ->schema([
//                 Section::make('Thông tin loại nội thất')
//                     ->description('Thêm, sửa, xóa các loại nội thất mẫu như Bếp, Bàn ghế.')
//                     ->schema([
//                         Grid::make(2)->schema([
//                             TextInput::make('name')
//                                 ->label('Tên nội thất')
//                                 ->required()
//                                 ->maxLength(255)
//                                 ->placeholder('Ví dụ: Bếp')
//                                 ->afterStateUpdated(function (Forms\Set $set, ?string $state) {
//                                     $set('slug', Str::slug($state));
//                                 }),


//                             Textarea::make('description')
//                                 ->label('Mô tả')
//                                 ->maxLength(1000)
//                                 ->placeholder('Nhập mô tả chi tiết'),
//                         ]),
//                     ])
//                     ->collapsible(),
//             ]);
//     }

//     public static function table(Table $table): Table
//     {
//         return $table
//             ->columns([
//                 TextColumn::make('name')
//                     ->label('Tên')
//                     ->searchable()
//                     ->sortable(),
//                 TextColumn::make('created_at')
//                     ->label('Ngày tạo')
//                     ->dateTime()
//                     ->sortable(),
//             ])
//             ->filters([
//                 //
//             ])
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//                 Tables\Actions\DeleteAction::make(),
//             ])
//             ->bulkActions([
//                 Tables\Actions\DeleteBulkAction::make(),
//             ]);
//     }

//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListFurnitureType::route('/'),
//             'create' => Pages\CreateFurnitureType::route('/create'),
//             'edit' => Pages\EditFurnitureType::route('/{record}/edit'),
//         ];
//     }
// }
