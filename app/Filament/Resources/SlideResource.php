<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Kids';

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
                ->directory('gyanbharal/kids/slides')
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
            'index' => Pages\ManageSlides::route('/'),
        ];
    }    
}
