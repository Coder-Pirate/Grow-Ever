<?php

namespace App\Filament\Resources\MembarResource\Pages;

use App\Filament\Resources\MembarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembars extends ListRecords
{
    protected static string $resource = MembarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
