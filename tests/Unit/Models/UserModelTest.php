<?php

namespace Tests\Unit\Models;

use App\Models\Business;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserModelTest extends TestCase
{

    use RefreshDatabase;

    public function test_that_user_has_many_business(): void
    {
        $user = User::factory()->create();
        Business::factory(10)->for($user)->create();
        $this->assertTrue($user->businesses()->count() ===  10);
    }
}
