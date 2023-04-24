<?php

namespace Tests\Unit\Models;

use App\Models\Business;
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
}
