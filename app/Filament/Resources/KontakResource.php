<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontakResource\Pages;
use App\Models\Kontak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KontakResource extends Resource
{
    protected static ?string $model = Kontak::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->options([
                                'email' => 'Email',
                                'phone' => 'Phone',
                                'address' => 'Address',
                                'hours' => 'Jam Operasional',
                                'facebook' => 'Facebook',
                                'instagram' => 'Instagram',
                                'twitter' => 'Twitter',
                                'youtube' => 'YouTube',
                                'tiktok' => 'TikTok',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('value')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('label')
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
                Tables\Columns\TextColumn::make('type')->sortable()->searchable()->label('Tipe')->toggleable(),
                Tables\Columns\TextColumn::make('value')->sortable()->searchable()->label('Value')->toggleable(),
                Tables\Columns\TextColumn::make('label')->sortable()->searchable()->label('Label')->toggleable(),
                Tables\Columns\BooleanColumn::make('active')->sortable()->label('Aktif')->toggleable(),
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
            'index' => Pages\ListKontaks::route('/'),
            'create' => Pages\CreateKontak::route('/create'),
            'edit' => Pages\EditKontak::route('/{record}/edit'),
        ];
    }

    protected static function shouldRegisterNavigationCreateAction(): bool
    {
        return true;
    }
}
