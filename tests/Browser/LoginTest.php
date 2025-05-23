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
            $browser->visit('/') // mengunjungi halaman web dengan route "/"
                    ->assertSee('Praktikum PPL') // memastikan teks "Praktikum PPL" muncul di halaman
                    ->clickLink('Log in') // mengklik link dengan teks "Log in"
                    ->assertPathIs('/login') // memastikan bahwa path saat ini adalah "/login"
                    ->type('email', 'x@gmail.com') // mengisi input dengan name "email" dengan nilai "x@gmail.com"
                    ->type('password', 'password') // mengisi input dengan name "password" dengan nilai "password"
                    ->press('LOG IN') // menekan tombol dengan label "LOG IN"
                    ->assertPathIs('/dashboard'); // memastikan bahwa setelah login berhasil, user diarahkan ke path "/dashboard"
        });
    }
}
