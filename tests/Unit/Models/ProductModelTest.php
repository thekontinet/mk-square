<?php

namespace Tests\Unit\Models;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductModelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_that_product_is_own_by_a_business(): void
    {
        $product = Product::factory()->create();
        $this->assertTrue($product->business()->exists());
    }

    public function test_that_product_may_be_categorized(){
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->uncategorized()->create();
        $this->assertTrue($product1->category()->exists());
        $this->assertTrue(!$product2->category()->exists());
    }
}
