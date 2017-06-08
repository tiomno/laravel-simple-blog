<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BrowserTest extends DuskTestCase
{
    /**
     * Testing the home page.
     */
    public function testHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Simple Blog')
                    ->assertSee('We will have some great content for you soon!');
        });
    }

    /**
     * Testing the login page.
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->assertSee('Forgot Your Password?');
        });
    }

    /**
     * Testing the register page.
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertSee('Register')
                ->assertSee('Confirm Password');
        });
    }
}
