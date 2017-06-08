<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Post;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     */
    public function testPosts()
    {
        $user = factory(User::class)->make();
        $post = factory(Post::class)->make();

//        $user->publish($post);

//        $this->assertTrue(true);
    }
}
