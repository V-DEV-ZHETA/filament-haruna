<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\DatePicker::make('tanggal_lahir'),
                            ]),
                        Forms\Components\TextInput::make('zodiak')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('warna_favorit')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('hewan_favorit')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('jiko')
                            ->maxLength(65535),
                        Forms\Components\FileUpload::make('foto')
                            ->image()
                            ->directory('members'),
                        Forms\Components\KeyValue::make('media_sosial')
                            ->label('Media Sosial')
                            ->keyLabel('Platform')
                            ->valueLabel('URL'),
                    ])
                    ->columns(1)
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')->label('Foto'),
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable()->label('Nama')->toggleable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')->date()->sortable()->label('Tanggal Lahir')->toggleable(),
                Tables\Columns\TextColumn::make('zodiak')->sortable()->searchable()->label('Zodiak')->toggleable(),
                Tables\Columns\TextColumn::make('warna_favorit')->sortable()->searchable()->label('Warna Favorit')->toggleable(),
                Tables\Columns\TextColumn::make('hewan_favorit')->sortable()->searchable()->label('Hewan Favorit')->toggleable(),
                Tables\Columns\TextColumn::make('jiko')->limit(50)->sortable()->label('Jiko')->toggleable(),
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
            'index' => Pages\ListMembers::route('/'),
        ];
    }
}
