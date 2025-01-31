<?php

namespace App\Filament\Resources\BimbinganBelajarResource\Pages;

use App\Filament\Resources\BimbinganBelajarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBimbinganBelajars extends ListRecords
{
    protected static string $resource = BimbinganBelajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
