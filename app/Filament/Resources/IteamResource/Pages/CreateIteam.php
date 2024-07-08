<?php

namespace App\Filament\Resources\IteamResource\Pages;

use App\Filament\Resources\IteamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIteam extends CreateRecord
{
    protected static string $resource = IteamResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
