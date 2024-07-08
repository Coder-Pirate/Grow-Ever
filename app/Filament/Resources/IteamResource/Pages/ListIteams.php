<?php

namespace App\Filament\Resources\IteamResource\Pages;

use App\Filament\Resources\IteamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIteams extends ListRecords
{
    protected static string $resource = IteamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
