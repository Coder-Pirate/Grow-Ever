<?php

namespace App\Filament\Resources\MembarResource\Pages;

use App\Filament\Resources\MembarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMembar extends CreateRecord
{
    protected static string $resource = MembarResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
