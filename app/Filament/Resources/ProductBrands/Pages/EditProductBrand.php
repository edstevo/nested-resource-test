<?php

namespace App\Filament\Resources\ProductBrands\Pages;

use App\Filament\Resources\ProductBrands\ProductBrandResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProductBrand extends EditRecord
{
    protected static string $resource = ProductBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
