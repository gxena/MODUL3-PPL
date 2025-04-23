<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DetailNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group detail
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

                    ->assertPathIs('/dashboard') // memastikan bahwa user diarahkan ke halaman "/dashboard" setelah login
                    ->visit('/notes') // mengunjungi halaman "/notes"
                    ->clickLink('Praktikum') // mengklik link atau judul note dengan nama "Praktikum"
                    ->assertSee('Notes / Praktikum'); // memastikan bahwa teks "Notes / Praktikum" muncul, menunjukkan halaman detail note
        });
    }
}