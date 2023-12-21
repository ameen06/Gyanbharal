<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EssayResource\Pages;
use App\Models\Essay;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class EssayResource extends Resource
{
    protected static ?string $model = Essay::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_link')
                    ->required()
                    ->columnSpanFull()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str(Str::slug($file->getClientOriginalName()))
                        ->prepend(time().'-')->append('.'.$file->getClientOriginalExtension()),
                    )
                    ->disk('imagekit')
                    ->directory('gyanbharal/essay/'),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->fileAttachmentsDisk('imagekit')
                    ->fileAttachmentsDirectory('gyanbharal/essay/content-images')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_link')->disk('imagekit'),
                Tables\Columns\TextColumn::make('title'),
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
            'index' => Pages\ListEssays::route('/'),
            'create' => Pages\CreateEssay::route('/create'),
            'edit' => Pages\EditEssay::route('/{record}/edit'),
        ];
    }    
}
