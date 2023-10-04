<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhraseResource\Pages;
use App\Models\Phrase;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PhraseResource extends Resource
{
    protected static ?string $model = Phrase::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->columnSpan('full'),
                RichEditor::make('content')
                    ->required()
                    ->fileAttachmentsDisk('imagekit')
                    ->fileAttachmentsDirectory('gyanbharal/phrases/content-images')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPhrases::route('/'),
            'create' => Pages\CreatePhrase::route('/create'),
            'edit' => Pages\EditPhrase::route('/{record}/edit'),
        ];
    }    
}
