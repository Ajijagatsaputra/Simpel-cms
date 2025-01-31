<?php

namespace App\Filament\Resources\CategoryProdukTabunganResource\Pages;

use App\Filament\Resources\CategoryProdukTabunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryProdukTabungan extends EditRecord
{
    protected static string $resource = CategoryProdukTabunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
