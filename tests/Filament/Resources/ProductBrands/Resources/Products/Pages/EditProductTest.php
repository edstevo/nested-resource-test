<?php

namespace App\Filament\Resources\ProductBrands\Resources\Products\Pages;

use App\Filament\Resources\ProductBrands\Pages\CreateProductBrand;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\User;
use Livewire\Livewire;

test('creates product ok', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $product = Product::factory()->create();

    Livewire::test(EditProduct::class, [
        'parentRecord' => $product->productBrand,
        'record' => $product->getKey(),
    ])
        ->assertOk()
        ->fillForm([
            'name' => 'New Name'
        ])
        ->call('save');
});
