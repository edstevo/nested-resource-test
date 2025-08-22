<?php

namespace App\Filament\Resources\ProductBrands\Pages;

use App\Models\User;
use Livewire\Livewire;

test('can create product brand ok', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $this->assertDatabaseCount('product_brands', 0);

    Livewire::test(CreateProductBrand::class)
        ->assertOk()
        ->fillForm([
            'name' => 'Test Brand'
        ])
        ->call('create');

    $this->assertDatabaseCount('product_brands', 1);
});
