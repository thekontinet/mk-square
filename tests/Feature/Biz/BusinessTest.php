<?php

namespace Tests\Feature\Biz;

use App\Models\Business;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BusinessTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_see_all_business(): void
    {
        $user = User::factory()->create();
        $businesses = Business::factory(10)->create([
            'user_id' => $user->id
        ]);

        $response = $this->actingAs($user)->get('/business');

        $response->assertStatus(200);
        $response->assertSeeTextInOrder($businesses->pluck('name')->toArray());
    }

    public function test_renders_business_creation_form(){
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('business.create'));

        $response->assertStatus(200);
    }

    public function test_can_create_new_business(){
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/business', [
            'name' => 'Test Business Name',
            'industry' => 'Test Industry'
        ]);

        $response->assertRedirect(route('business.index'));
    }
}
