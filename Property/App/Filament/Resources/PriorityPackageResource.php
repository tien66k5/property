<?php

namespace Modules\Property\App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\{TextInput, Section, Grid, Toggle};
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\{TextColumn, BooleanColumn};
use Filament\Tables\Table;
use Modules\Property\App\Models\PriorityPackage;
use Modules\Property\App\Filament\Resources\PriorityPackageResource\Pages;

class PriorityPackageResource extends Resource
{
    protected static ?string $model = PriorityPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationLabel = 'Gói ưu tiên';

    protected static ?string $navigationGroup = 'Cấu hình bất động sản';

    protected static ?string $modelLabel = 'Gói ưu tiên';


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Section::make('Thông tin gói ưu tiên')
                    ->description('Thêm, sửa, xóa các gói ưu tiên như Gói Bạc, Gói Vàng, Gói Kim Cương.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Tên gói')
                                ->required()
                                ->maxLength(255)
                                ->placeholder('Ví dụ: Gói Kim Cương'),

                            TextInput::make('price')
                                ->label('Giá')
                                ->numeric()
                                ->required()
                                ->suffix(' VND/ngày')
                                ->placeholder('Nhập giá gói (VND/ngày)'),

                            TextInput::make('duration_days')
                                ->label('Thời gian hiệu lực mặc định')
                                ->numeric()
                                ->required()
                                ->suffix(' ngày')
                                ->placeholder('Nhập số ngày mặc định'),

                            TextInput::make('priority_level')
                                ->label('Mức độ ưu tiên')
                                ->numeric()
                                ->required()
                                ->minValue(1)
                                ->maxValue(10)
                                ->placeholder('Nhập mức ưu tiên (1-10, nhỏ hơn là ưu tiên cao hơn)'),

                            TextInput::make('start_time')
                                ->label('Giờ bắt đầu mặc định')
                                ->type('time')
                                ->required()
                                ->placeholder('Chọn giờ bắt đầu'),

                            Toggle::make('is_old')
                                ->label('Gói đã hết hạn')
                                ->default(false)
                                ->onIcon('heroicon-s-check-circle')
                                ->offIcon('heroicon-s-x-circle')
                                ->inline(),
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
                TextColumn::make('price')
                    ->label('Giá')
                    ->money('VND')
                    ->sortable(),
                TextColumn::make('priority_level')
                    ->label('Mức độ ưu tiên')
                    ->sortable(),
                BooleanColumn::make('is_old')
                    ->label('Đã hết hạn'),
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
            'index' => Pages\ListPriorityPackage::route('/'),
            'create' => Pages\CreatePriorityPackage::route('/create'),
            'edit' => Pages\EditPriorityPackage::route('/{record}/edit'),
        ];
    }
}

// namespace Modules\Property\App\Filament\Resources;

// use Filament\Forms;
// use Filament\Forms\Components\{TextInput, Section, Grid, Toggle};
// use Filament\Resources\Resource;
// use Filament\Tables;
// use Filament\Tables\Columns\{TextColumn, BooleanColumn};
// use Filament\Tables\Table;
// use Modules\Property\App\Models\PriorityPackage;
// use Modules\Property\App\Filament\Resources\PriorityPackageResource\Pages;

// class PriorityPackageResource extends Resource
// {
//     protected static ?string $model = PriorityPackage::class;

//     protected static ?string $navigationIcon = 'heroicon-o-star';

//     protected static ?string $navigationLabel = 'Gói ưu tiên';

//     protected static ?string $navigationGroup = 'Cấu hình bất động sản';

//     protected static ?string $modelLabel = 'Gói ưu tiên';


//     public static function form(Forms\Form $form): Forms\Form
//     {
//         return $form
//             ->schema([
//                 Section::make('Thông tin gói ưu tiên')
//                     ->description('Tùy chỉnh các gói ưu tiên, bao gồm giá, thời gian và mức độ ưu tiên.')
//                     ->schema([
//                         Grid::make(2)->schema([
//                             TextInput::make('name')
//                                 ->label('Tên gói')
//                                 ->required()
//                                 ->maxLength(255)
//                                 ->placeholder('Ví dụ: Gói VIP'),

//                             TextInput::make('price')
//                                 ->label('Giá')
//                                 ->numeric()
//                                 ->required()
//                                 ->suffix(' VND')
//                                 ->placeholder('Nhập giá gói'),

//                             TextInput::make('duration_days')
//                                 ->label('Thời gian hiệu lực')
//                                 ->numeric()
//                                 ->required()
//                                 ->suffix(' ngày')
//                                 ->placeholder('Nhập số ngày'),

//                             TextInput::make('priority_level')
//                                 ->label('Mức độ ưu tiên')
//                                 ->numeric()
//                                 ->required()
//                                 ->placeholder('Nhập mức ưu tiên (1-10)'),

//                             TextInput::make('start_time')
//                                 ->label('Giờ bắt đầu')
//                                 ->type('time')
//                                 ->placeholder('Chọn giờ bắt đầu'),

//                             Toggle::make('is_old')
//                                 ->label('Gói đã hết hạn')
//                                 ->default(false)
//                                 ->onIcon('heroicon-s-check-circle')
//                                 ->offIcon('heroicon-s-x-circle')
//                                 ->inline(),
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
//                 TextColumn::make('price')
//                     ->label('Giá')
//                     ->money('VND')
//                     ->sortable(),
//                 TextColumn::make('priority_level')
//                     ->label('Mức độ ưu tiên')
//                     ->sortable(),
//                 BooleanColumn::make('is_old')
//                     ->label('Đã hết hạn'),
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
//             'index' => Pages\ListPriorityPackage::route('/'),
//             'create' => Pages\CreatePriorityPackage::route('/create'),
//             'edit' => Pages\EditPriorityPackage::route('/{record}/edit'),
//         ];
//     }
// }
