<?php

namespace App\Filament\Resources\GrammerResource\Pages;

use App\Filament\Resources\GrammerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrammer extends EditRecord
{
    protected static string $resource = GrammerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
