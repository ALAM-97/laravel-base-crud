<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->series = $comic['series'];
            $newComic->description = $comic['description'];
            $newComic->price = $comic['price'];
            $newComic->image = $comic['thumb'];
            $newComic->save();
        }
    }
}
