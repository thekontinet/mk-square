<?php

namespace Tests\Unit\Models;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_contact_belong_to_a_business(): void
    {
        $contact = Contact::factory()->create();
        $this->assertTrue($contact->business()->exists());
    }
}
