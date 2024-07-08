<?php

namespace App\Filament\Resources\MembarResource\Pages;

use App\Filament\Resources\MembarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembar extends EditRecord
{
    protected static string $resource = MembarResource::class;

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
