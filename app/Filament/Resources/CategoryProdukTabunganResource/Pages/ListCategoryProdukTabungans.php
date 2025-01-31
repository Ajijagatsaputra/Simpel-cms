<?php

namespace App\Filament\Resources\CategoryProdukTabunganResource\Pages;

use App\Filament\Resources\CategoryProdukTabunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryProdukTabungans extends ListRecords
{
    protected static string $resource = CategoryProdukTabunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
