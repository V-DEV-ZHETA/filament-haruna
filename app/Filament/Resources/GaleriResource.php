<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('category')
                            ->options([
                                'performance' => 'Performance',
                                'behind_the_scene' => 'Behind The Scene',
                                'event' => 'Event',
                            ])
                            ->nullable(),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(65535),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('galeri')
                            ->imageResizeTargetWidth(1920)
                            ->imageResizeTargetHeight(1080)
                            ->imageResizeMode('contain')
                            ->maxSize(20240),
                        Forms\Components\TextInput::make('video_url')
                            ->url()
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
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->label('Judul')->toggleable(),
                Tables\Columns\TextColumn::make('category')->sortable()->searchable()->label('Kategori')->toggleable(),
                Tables\Columns\ImageColumn::make('image')->label('Gambar'),
                Tables\Columns\BooleanColumn::make('active')->sortable()->label('Aktif')->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->icon('heroicon-o-pencil')->label('Edit'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Delete Selected'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
