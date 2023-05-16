<?php

namespace Database\Seeders;

use App\Models\Comicbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 12; $i ++) {
            
            $newComicBook = new Comicbook();
            
            $newComicBook->title = 'title';
            $newComicBook->description = 'description';
            $newComicBook->thumb = 'image';
            $newComicBook->price = '$12.99';
            $newComicBook->series = 'series';
            $newComicBook->sale_date = '1998-10-02';
            $newComicBook->type = 'type';
    
            $newComicBook->save();
        }

    }
}
