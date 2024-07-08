<?php

namespace App\Filament\Resources\IteamResource\Pages;

use App\Filament\Resources\IteamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIteam extends EditRecord
{
    protected static string $resource = IteamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
