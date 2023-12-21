<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GrammerResource\Pages;
use App\Models\Grammer;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\support\Str;

class GrammerResource extends Resource
{
    protected static ?string $model = Grammer::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->columnSpan('full'),
                FileUpload::make('image_link')
                    ->required()
                    ->columnSpanFull()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str(Str::slug($file->getClientOriginalName()))
                        ->prepend(time().'-')->append('.'.$file->getClientOriginalExtension()),
                    )
                    ->disk('imagekit')
                    ->directory('gyanbharal/grammer/'),
                Textarea::make('description')
                    ->required()
                    ->rows(2)
                    ->columnSpan('full'),
                RichEditor::make('content')
                    ->required()
                    ->fileAttachmentsDisk('imagekit')
                    ->fileAttachmentsDirectory('gyanbharal/grammer/content-images')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_link')->disk('imagekit'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ListGrammers::route('/'),
            'create' => Pages\CreateGrammer::route('/create'),
            'edit' => Pages\EditGrammer::route('/{record}/edit'),
        ];
    }    
}
