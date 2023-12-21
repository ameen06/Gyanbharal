<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSlideResource\Pages;
use App\Filament\Resources\HomeSlideResource\RelationManagers;
use App\Models\HomeSlide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\support\Str;

class HomeSlideResource extends Resource
{
    protected static ?string $model = HomeSlide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_link')
                    ->required()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str(Str::slug($file->getClientOriginalName()))
                            ->prepend(time().'-')->append('.'.$file->getClientOriginalExtension()),
                    )
                    ->disk('imagekit')
                    ->directory('gyanbharal/home-slides')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_link')
                    ->height(150)
                    ->disk('imagekit'),
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
            'index' => Pages\ManageHomeSlides::route('/'),
        ];
    }    
}
