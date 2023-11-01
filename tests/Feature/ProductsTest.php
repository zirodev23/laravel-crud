<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;


class ProductsTest extends TestCase
{
    public function test_homepage_contains_empty_table(): void
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
        $response->assertSee('No products found');
        $response->assertSee(value: 'New product');
    }

    public function test_homepage_contains_non_empty_table(): void
    {
        Product::create([
            'name' => 'Milk',
            'qty' => 25,
            'price' => 1.46,
            'description' => 'Some milk'
        ]);

        $response = $this->get('/products');
        $response->assertStatus(200);
        $response->assertDontSee('No products found');
        // $response->assertSee(value: 'New product');
    }

}
