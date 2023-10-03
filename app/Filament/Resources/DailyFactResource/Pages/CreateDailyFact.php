<?php

namespace App\Filament\Resources\DailyFactResource\Pages;

use App\Filament\Resources\DailyFactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDailyFact extends CreateRecord
{
    protected static string $resource = DailyFactResource::class;
}
