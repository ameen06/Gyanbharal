<?php

namespace App\Filament\Resources\DailyFactResource\Pages;

use App\Filament\Resources\DailyFactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDailyFacts extends ListRecords
{
    protected static string $resource = DailyFactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
