<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizResource\Pages;
use App\Models\Quiz;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuizResource extends Resource
{
    protected static ?string $model = Quiz::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('question')->required()->columnSpanFull(),
                Forms\Components\TextInput::make('answer')->required(),
                Forms\Components\TextInput::make('option_1')->required(),
                Forms\Components\TextInput::make('option_2')->required(),
                Forms\Components\TextInput::make('option_3')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')->searchable(),
                Tables\Columns\TextColumn::make('answer'),
                Tables\Columns\TextColumn::make('option_1'),
                Tables\Columns\TextColumn::make('option_2'),
                Tables\Columns\TextColumn::make('option_3'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageQuizzes::route('/'),
        ];
    }    
}
