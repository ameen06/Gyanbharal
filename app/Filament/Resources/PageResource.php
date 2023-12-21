<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        Forms\Components\TextInput::make('page_title')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('page_icon')
                            ->required()
                            ->columnSpanFull()
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str(Str::slug($file->getClientOriginalName()))
                                ->prepend(time().'-')->append('.'.$file->getClientOriginalExtension()),
                            )
                            ->disk('imagekit')
                            ->directory('gyanbharal/pages/')
                    ]),
                    Forms\Components\Section::make('Page Content')
                        ->description('Add the content which will show inside the page')
                        ->schema([
                            Forms\Components\RichEditor::make('page_content')
                                ->required()
                                ->fileAttachmentsDisk('imagekit')
                                ->fileAttachmentsDirectory('gyanbharal/pages/content-images')
                                ->columnSpanFull(),
                        ])
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('page_icon')->disk('imagekit'),
                Tables\Columns\TextColumn::make('page_title'),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
