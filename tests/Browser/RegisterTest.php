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
            $browser->visit('/') // mengunjungi halaman web dengan route "/"
                    ->assertSee('Praktikum PPL') // memastikan teks "Praktikum PPL" muncul di halaman
                    ->clickLink('Register') // mengklik link dengan teks "Register"
                    ->type('name', 'xena') // mengisi input dengan name "name" dengan nilai "xena"
                    ->type('email', 'x@gmail.com') // mengisi input dengan name "email" dengan nilai "x@gmail.com"
                    ->type('password', 'password') // mengisi input dengan name "password" dengan nilai "password"
                    ->type('password_confirmation', 'password') // mengisi input dengan name "password_confirmation" dengan nilai "password"
                    ->press('REGISTER') // menekan tombol dengan label "REGISTER"
                    ->assertPathIs('/dashboard'); // memastikan bahwa setelah proses register berhasil, user diarahkan ke path "/dashboard"
        });
    }
}
