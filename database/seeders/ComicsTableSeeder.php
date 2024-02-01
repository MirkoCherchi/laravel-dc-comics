<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config("comics_db");
        foreach ($comics as $comic_item) {
            $comic = new Comic();
            $comic->title = $comic_item['title'];
            $comic->description = $comic_item['description'];
            $comic->thumb = $comic_item['thumb'];
            $comic->price = $comic_item['price'];
            $comic->series = $comic_item['series'];
            $comic->sale_date = $comic_item['sale_date'];
            $comic->type = $comic_item['type'];
            $comic->artists = json_encode($comic_item['artists']);
            $comic->writers = json_encode($comic_item['writers']);

            $comic->save();
        }
    }
}
