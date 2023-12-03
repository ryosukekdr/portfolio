<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Blog;

class LikeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
     
    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->blog = Blog::factory()->create(['id' => '3',]);
    }
    
    public function testLike()
    {
        $response = $this->ActingAs($this->user)->post('/like',['blog_id' => '3']);
        $response->assertStatus(200);
        
        //$this->assertDatabaseHas('likes', ['user_id' => , 'blog_id' => ]);
    }
}
