<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
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
                    ->assertPathIs('/dashboard') // memastikan bahwa user diarahkan ke halaman dashboard

                    ->clickLink('Notes') // mengklik link dengan teks "Notes"
                    ->assertPathIs('/notes') // memastikan bahwa path saat ini adalah "/notes"
                    ->clickLink('Edit') // mengklik link dengan teks "Edit" pada salah satu note
                    ->assertSee('Title') // memastikan elemen dengan teks "Title" muncul (form edit muncul)
                    ->assertSee('Description') // memastikan elemen dengan teks "Description" muncul
                    ->type('title', 'Praktikum') // mengubah nilai pada input "title" menjadi "Praktikum"
                    ->type('description', 'tes edit notes') // mengubah nilai pada input "description" menjadi "tes edit notes"
                    ->press('UPDATE') // menekan tombol dengan label "UPDATE"
                    ->assertSee('Note has been updated'); // memastikan bahwa muncul teks "Note has been updated" setelah update berhasil
        });
    }
}