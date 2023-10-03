<?php

namespace App\Filament\Resources\DailyFactResource\Pages;

use App\Filament\Resources\DailyFactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDailyFact extends EditRecord
{
    protected static string $resource = DailyFactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
