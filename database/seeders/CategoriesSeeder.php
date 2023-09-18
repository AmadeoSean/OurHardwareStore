<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Carbon\Carbon;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'name' => 'Alat Tulis dan Olahraga',
            'description' => 'Peralatan Kantor, Peralatan Renang, Skipping, Alat Tulis, Raket, Aksesori Olahraga',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Alat Rumah Tangga',
            'description' => 'Peralatan Kebersihan, Gantungan & Keranjang Pakaian, Peralatan Rumah Tangga, Aksesori Rumah Tangga, Peralatan Dapur,
            Peralatan Mandi, Penata & Penyimpanan, Peralatan Makan',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Mainan Anak',
            'description' => 'Mainan, Seni & Kerajinan, Penunjang Belajar, Lainnya',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);

      
    }
}
