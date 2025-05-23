<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Notes
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
                    ->assertPathIs('/dashboard') // memastikan bahwa setelah login berhasil, user diarahkan ke path "/dashboard"

                    ->clickLink('Notes') // mengklik link dengan teks "Notes"
                    ->assertPathIs('/notes') // memastikan bahwa path saat ini adalah "/notes"
                    ->clickLink('Create Note') // mengklik link dengan teks "Create Note"
                    ->assertSee('Title') // memastikan elemen dengan teks "Title" muncul di halaman
                    ->assertSee('Description') // memastikan elemen dengan teks "Description" muncul di halaman
                    ->type('title', 'Praktikum') // mengisi input dengan name "title" dengan nilai "Praktikum"
                    ->type('description', 'ppl mantap') // mengisi input dengan name "description" dengan nilai "ppl mantap"
                    ->press('CREATE') // menekan tombol dengan label "CREATE"
                    ->assertSee('Praktikum'); // memastikan bahwa teks "Praktikum" muncul di halaman sebagai hasil dari note yang berhasil dibuat
        });
    }
}
