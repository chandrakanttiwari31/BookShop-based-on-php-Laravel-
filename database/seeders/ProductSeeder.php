<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
          
        [
            'name'=>'php',
             'price'=>'500',
             'Author'=>'Tylor',
             'Description'=>'use to create web pages',
             "image"=>'https://m.media-amazon.com/images/I/41WqNryqTlL.jpg '
  
        ],
        [
            'name'=>'java',
             'price'=>'700',
             'Author'=>'James',
             'Description'=>'jave suppotrs oops',
             "image"=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1455925344l/29227081._SY475_.jpg'

        ],
        [
            'name'=>'python',
             'price'=>'600',
             'Author'=>'Gaydo',
             'Description'=>'Easy to use',
             "image"=>'https://images-na.ssl-images-amazon.com/images/I/51tjBN6kkEL._SX374_BO1,204,203,200_.jpg
             '
  
        ],
        [
            'name'=>'Data Structure',
             'price'=>'900',
             'Author'=>'Tiwari',
             'Description'=>'Its very Complex',
             "image"=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1387724849l/289360.jpg
             '
  
        ],
       
          ]);
    }
}

