<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DailyFactResource\Pages;
use App\Models\DailyFact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\support\Str;

class DailyFactResource extends Resource
{
    protected static ?string $model = DailyFact::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan('full'),
                Forms\Components\FileUpload::make('image_link')
                    ->required()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str(Str::slug($file->getClientOriginalName()))
                        ->prepend(time().'-')->append('.'.$file->getClientOriginalExtension()),
                    )
                    ->disk('imagekit')
                    ->directory('gyanbharal/daily-facts/')
                    ->columnSpan('full'),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->fileAttachmentsDisk('imagekit')
                    ->fileAttachmentsDirectory('gyanbharal/daily-facts/content-images')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_link')
                    ->height(100)
                    ->disk('imagekit'),
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
            'index' => Pages\ListDailyFacts::route('/'),
            'create' => Pages\CreateDailyFact::route('/create'),
            'edit' => Pages\EditDailyFact::route('/{record}/edit'),
        ];
    }    
}
