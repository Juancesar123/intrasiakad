<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DataKursusTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            //digunakan saat linnk di kunjungin kalau ada tulisan data kursus berarti lolos
            $browser->visit('/datakursus')
                    ->assertSee('Data Kursus');
            /*
                digunakan saat linnk di kunjungin kalau ada tulisan data kursus berarti lolos
                dan ->type digunakan untuk mengisi form input yang namenya course_name
                press save jika tombol save di klik maka harus kearah datakursus
            */
            $browser->visit('/tambahdatakursus')
                    ->assertSee('Tambah Data Kursus')
                    ->type('course_name', 'Laravel')
                    ->press('Save')
                    ->assertPathIs('/datakurus');
            /*
                menyorot ke class table dan mengklik link delete
            */
            $browser->with('.table', function ($table) {
                $table->clickLink('Delete');
            });
        });
    }
}
