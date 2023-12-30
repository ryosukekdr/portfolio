<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
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
    
    /**
     * テスト用データ作成
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->viewer_id = random_int(1,9999);
        $this->blog_id = random_int(1,9999);
        $this->poster_id = random_int(1,9999);
        $this->viewer = User::factory()->create(['id' => $this->viewer_id]); //いいねするユーザ準備
        $this->poster = User::factory()->create(['id' => $this->poster_id]); //いいねされるユーザ準備。blogsテーブルにuser_idを外部キー制約しているため準備必須
        $this->blog = Blog::factory()->create(['id' => $this->blog_id, 'user_id' => $this->poster_id]); //いいねされるブログ準備。投稿者はposter
    }
    
    /**
     * いいねを付与するテスト
     */
    public function testLike()
    {
        $response = $this->ActingAs($this->viewer)->post('/like',['blog_id' => $this->blog_id]); //viewerがブログにいいねする
        $response->assertStatus(200);
        
        $this->assertDatabaseHas('likes', ['user_id' => $this->viewer_id, 'blog_id' => $this->blog_id]); //いいねが保存されているかチェック
        $this->assertEquals(Blog::find($this->blog_id)->likes->count(), 1); //いいね総数チェック
    }
    
    /**
     * 付与したいいねを取り消すテスト
     */
    public function testLike_delete()
    {
        $this->like = Like::factory()->create(['user_id' => $this->viewer_id, 'blog_id' => $this->blog_id]); //予めいいねデータを準備
        $this->assertDatabaseHas('likes', ['user_id' => $this->viewer_id, 'blog_id' => $this->blog_id]); //保存されたかチェック
        $this->assertEquals(Blog::find($this->blog_id)->likes->count(), 1); //いいね総数チェック
        
        $response = $this->ActingAs($this->viewer)->post('/like',['blog_id' => $this->blog_id]); //viewerがブログのいいねを削除
        $response->assertStatus(200);
        
        $this->assertDatabaseMissing('likes', ['user_id' => $this->viewer_id, 'blog_id' => $this->blog_id]); //削除されてlikesテーブルに存在しないことをチェック
        $this->assertEquals(Blog::find($this->blog_id)->likes->count(), 0); //いいね総数チェック
    }
}