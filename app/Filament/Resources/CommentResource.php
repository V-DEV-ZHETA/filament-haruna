<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        Forms\Components\TextInput::make('subject')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('message')
                            ->required()
                            ->maxLength(65535),
                    ])
                    ->columns(1)
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Name')->toggleable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable()->label('Email')->toggleable(),
                Tables\Columns\TextColumn::make('subject')->sortable()->searchable()->label('Subject')->toggleable(),
                Tables\Columns\TextColumn::make('message')->limit(50)->label('Message')->toggleable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Created At')->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->icon('heroicon-o-eye')->label('View'),
                Tables\Actions\DeleteAction::make()->icon('heroicon-o-trash')->label('Delete'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Delete Selected'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
            'view' => Pages\ViewComment::route('/{record}'),
        ];
    }
}
