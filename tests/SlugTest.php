<?php

namespace Formostock\Utils\Test;

use Formostock\Utils\Test\Models\Post;

class SlugTest extends TestCase
{
    public function test_en_slug()
    {
        $post = factory(Post::class)->create([
            'title' => 'This is New Post',
        ]);
        $this->assertNotNull($post);
        $this->assertEquals(
            $post->slug,
            'this-is-new-post'
        );    
    }

    public function test_zh_slug()
    {
        $post = factory(Post::class)->create([
            'title' => '這 是 新的 文章',
        ]);
        $this->assertNotNull($post);
        $this->assertEquals(
            $post->slug,
            '這-是-新的-文章'
        );    
    }
}