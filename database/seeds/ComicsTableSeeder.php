<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config('comics');

        foreach ($comicsList as $comics) {
            $newComics = new Comic();
            $newComics->title = $comics['title'];
            $newComics->description = $comics['description'];
            $newComics->thumb = $comics['thumb'];
            $newComics->price = $comics['price'];
            $newComics->series = $comics['series'];
            $newComics->sale_date = $comics['sale_date'];
            $newComics->type = $comics['type'];
            $newComics->save();
        }
    }
}
