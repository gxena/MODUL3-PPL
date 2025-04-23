<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> assertSee('Praktikum PPL')    
                -> clickLink('Register')
                -> type ('name', 'xena')
                -> type ('email', 'x@gmail.com')
                -> type ('password', 'password')
                -> type ('password_confirmation', 'password')
                -> press('REGISTER')
                ->assertPathIs('/dashboard');
        });
    }
}
