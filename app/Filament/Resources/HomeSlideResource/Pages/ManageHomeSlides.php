<?php

namespace App\Filament\Resources\HomeSlideResource\Pages;

use App\Filament\Resources\HomeSlideResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeSlides extends ManageRecords
{
    protected static string $resource = HomeSlideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
