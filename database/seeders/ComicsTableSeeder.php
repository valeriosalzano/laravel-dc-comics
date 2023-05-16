<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // OLD VERSION WITH CONFIG FILE
    // public function run()
    // {
    //     $comics = config('comics');

    //     foreach ($comics as $comic) {
    //         $newComic = new Comic();
    //         $newComic->title = $comic['title'];
    //         $newComic->description = $comic['description'];
    //         $newComic->thumb = $comic['thumb'];
    //         $newComic->price = $comic['price'];
    //         $newComic->series = $comic['series'];
    //         $newComic->sale_date = $comic['sale_date'];
    //         $newComic->type = $comic['type'];
    //         $newComic->save();
    //     }
    // }

    public function run()
    {
        $csvContent = Helpers::getCsvContent(__DIR__ . '/comics.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $newComic = new Comic();
                $newComic->title = $row[0];
                $newComic->description = $row[1];
                $newComic->thumb = $row[2];
                $newComic->price = $row[3];
                $newComic->series = $row[4];
                $newComic->sale_date = $row[5];
                $newComic->type = $row[6];
                $newComic->save();
            }
        }
    }
}
