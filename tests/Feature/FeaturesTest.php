<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FeaturesTest extends TestCase
{
    /**
     * Testing the status of the pages.
     */
    public function testStatus()
    {
        $this->get('/')->assertStatus(200);
        $this->get('/home')->assertStatus(200);
        $this->get('/login')->assertStatus(200);
        $this->get('/register')->assertStatus(200);
        $this->get('/posts/NaN')->assertStatus(404);
    }

    /**
     * Testing the content of the pages.
     */
    public function testContent()
    {
        $this->get('/')->assertSee('Simple Blog');
        $this->get('/')->assertSee('We will have some great content for you soon!');

        $this->get('/home')->assertSee('Simple Blog');
        $this->get('/home')->assertSee('We will have some great content for you soon!');

        $this->get('/login')->assertSee('Login');
        $this->get('/login')->assertSee('Forgot Your Password?');

        $this->get('/register')->assertSee('Register');
        $this->get('/register')->assertSee('Confirm Password');
    }

}
