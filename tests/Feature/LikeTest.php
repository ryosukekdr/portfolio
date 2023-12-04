<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Blog;
use App\Models\Like;

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
        $this->viewer = User::factory()->create(['id' => 22]); //いいねするユーザ準備
        $this->poster = User::factory()->create(['id' => 11]); //いいねされるユーザ準備。blogsテーブルにuser_idを外部キー制約しているため準備必須
        $this->blog = Blog::factory()->create(['id' => 99]); //いいねされるブログ準備。投稿者はposter
    }
    
    public function testLike()
    {
        $response = $this->ActingAs($this->viewer)->post('/like',['blog_id' => 99]); //id=22のユーザがid=99のブログにいいねする
        $response->assertStatus(200);
        
        $this->assertDatabaseHas('likes', ['user_id' => 22, 'blog_id' => 99]); //いいねが保存されているかチェック
        $this->assertEquals(Blog::withCount('likes')->find(99)->likes_count, 1); //いいね総数チェック
    }
    
    public function testLike_delete()
    {
        $this->like = Like::factory()->create(); //予めいいねデータを準備
        $this->assertDatabaseHas('likes', ['user_id' => 22, 'blog_id' => 99]); //保存されたかチェック
        $this->assertEquals(Blog::withCount('likes')->find(99)->likes_count, 1); //いいね総数チェック
        
        $response = $this->ActingAs($this->viewer)->post('/like',['blog_id' => 99]); //id=22のユーザがid=99のブログのいいねを削除
        $response->assertStatus(200);
        
        $this->assertDatabaseMissing('likes', ['user_id' => 22, 'blog_id' => 99]); //削除されてlikesテーブルに存在しないことをチェック
        $this->assertEquals(Blog::withCount('likes')->find(99)->likes_count, 0); //いいね総数チェック
    }
}
