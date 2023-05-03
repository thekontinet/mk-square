<?php

namespace Tests\Unit\Models;

use App\Models\Business;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_category_is_linked_to_many_business(): void
    {
        $category = Category::factory()->create();
        $category->businesses()->sync(Business::factory(10)->create());
        $this->assertTrue($category->businesses()->count() === 10);
    }

    public function test_that_list_of_products_can_be_in_a_category(){
        $category = Category::factory()->has(Product::factory(10))->create();

        $this->assertTrue($category->products()->count() === 10);
    }
}
