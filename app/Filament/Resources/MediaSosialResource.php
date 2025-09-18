<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaSosialResource\Pages;
use App\Models\MediaSosial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class MediaSosialResource extends Resource
{
    protected static ?string $model = MediaSosial::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('platform')
                            ->required()
                            ->default('unknown')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('username')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->default('')
                            ->maxLength(255),
                        Forms\Components\Toggle::make('active')
                            ->default(true),
                    ])
                    ->columns(1)
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('platform')->label('Platform')->toggleable(),
                Tables\Columns\TextColumn::make('username')->label('Username')->toggleable(),
                Tables\Columns\TextColumn::make('url')->label('URL')->toggleable(),
                Tables\Columns\BooleanColumn::make('active')->label('Aktif')->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->icon('heroicon-o-pencil')->label('Edit'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Delete Selected'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMediaSosials::route('/'),
            'create' => Pages\CreateMediaSosial::route('/create'),
            'edit' => Pages\EditMediaSosial::route('/{record}/edit'),
        ];
    }
}
