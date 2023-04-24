<?php

namespace Tests\Unit\Models;

use App\Models\Business;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BusinessModelTest extends TestCase
{

    use RefreshDatabase;

    public function test_that_users_can_own_a_business(): void
    {
        $business = Business::factory()->create();
        $this->assertTrue($business->user()->exists());
    }

    public function test_that_business_can_have_many_contact(){
        $business = Business::factory()->has(Contact::factory(10))->create();
        $this->assertTrue($business->contacts()->count() === 10);
    }

    public function test_that_business_is_linked_to_many_category(): void
    {
        $business = Business::factory()->create();
        $business->categories()->sync(Category::factory(10)->create());
        $this->assertTrue($business->categories()->count() === 10);
    }
}
