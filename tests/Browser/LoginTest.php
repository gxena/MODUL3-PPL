<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                -> assertSee('Praktikum PPL')    
                -> clickLink('Log in')
                -> assertPathIs('/login')
                -> type('email', 'x@gmail.com')
                -> type('password', 'password')
                -> press('LOG IN')
                ->assertPathIs('/dashboard');
        });
    }
}
