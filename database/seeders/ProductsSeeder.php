<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Carbon\Carbon;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Buku Alphabet',
            'image' => 'Buku Alphabet.jpg',
            'price' => 11500,
            'stock_quantity' => 10,
            'category_id' => 3,
            'description' => 'BUKU ALPHABET. RP11.500, RP10.500(BTM)',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Papan Tulis 25x35cm',
            'image' => 'Papan Tulis 25x35cm.jpg',
            'price' => 27000,
            'stock_quantity' => 10,
            'category_id' => 3,
            'description' => 'PAPAN TULIS 25X35CM. RP27.000, RP24.500(BTM)',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Penggaris Besi 30cm',
            'image' => 'Penggaris Besi 30cm.jpg',
            'price' => 8500,
            'stock_quantity' => 10,
            'category_id' => 1,
            'description' => 'PENGGARIS BESI 30CM. RP8.500, RP7.500(BTM)',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Stick Notes',
            'image' => 'Stick Notes.jpg',
            'price' => 8000,
            'stock_quantity' => 10,
            'category_id' => 1,
            'description' => 'STICK NOTES. RP8.000, RP7.000(BTM)',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Peniti 150s',
            'image' => 'Peniti 150s.jpg',
            'price' => 9500,
            'stock_quantity' => 10,
            'category_id' => 2,
            'description' => 'PENITI 150s. RP9.500, RP8.000(BTM)',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Solatip 24mmx10yds',
            'image' => 'Solatip 24mmx10yds.jpg',
            'price' => 10000,
            'stock_quantity' => 10,
            'category_id' => 2,
            'description' => 'SOLATIP 24MMX10YDS. RP10.000, RP9.000(BTM)',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);


    }
}
