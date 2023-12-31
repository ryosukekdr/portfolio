<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     
    use RefreshDatabase;
     
    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }
    
    public function test_the_application_returns_a_successful_response()
    {
        //$user = factory(User::class)->create();
        $response = $this->ActingAs($this->user)->get('/');

        $response->assertStatus(200);
    }
}
