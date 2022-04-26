<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array comics config comics.php
        $comics = config('comics');

        // Creo un nuovo comic
        $comic = new Comic();

        // Ciclo for array comics per settare i valori dei campi del db
        foreach ($comics as $element) {

            $comic->title = $element['title'];
            $comic->description = $element['description'];
            $comic->thumb = $element['thumb'];
            $comic->price = $element['price'];
            $comic->series = $element['series'];
            $comic->sale_date = $element['sale_date'];
            $comic->type = $element['type'];
            $comic->save();
        }
    }
}
