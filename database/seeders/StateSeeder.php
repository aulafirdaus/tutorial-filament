<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->delete();
        $states = array(
            array('name' => "Aceh", 'country_id' => 102),
            array('name' => "Bali", 'country_id' => 102),
            array('name' => "Bangka-Belitung", 'country_id' => 102),
            array('name' => "Banten", 'country_id' => 102),
            array('name' => "Bengkulu", 'country_id' => 102),
            array('name' => "Gandaria", 'country_id' => 102),
            array('name' => "Gorontalo", 'country_id' => 102),
            array('name' => "Jakarta", 'country_id' => 102),
            array('name' => "Jambi", 'country_id' => 102),
            array('name' => "Jawa Barat", 'country_id' => 102),
            array('name' => "Jawa Tengah", 'country_id' => 102),
            array('name' => "Jawa Timur", 'country_id' => 102),
            array('name' => "Kalimantan Barat", 'country_id' => 102),
            array('name' => "Kalimantan Selatan", 'country_id' => 102),
            array('name' => "Kalimantan Tengah", 'country_id' => 102),
            array('name' => "Kalimantan Timur", 'country_id' => 102),
            array('name' => "Kendal", 'country_id' => 102),
            array('name' => "Lampung", 'country_id' => 102),
            array('name' => "Maluku", 'country_id' => 102),
            array('name' => "Maluku Utara", 'country_id' => 102),
            array('name' => "Nusa Tenggara Barat", 'country_id' => 102),
            array('name' => "Nusa Tenggara Timur", 'country_id' => 102),
            array('name' => "Papua", 'country_id' => 102),
            array('name' => "Riau", 'country_id' => 102),
            array('name' => "Riau Kepulauan", 'country_id' => 102),
            array('name' => "Solo", 'country_id' => 102),
            array('name' => "Sulawesi Selatan", 'country_id' => 102),
            array('name' => "Sulawesi Tengah", 'country_id' => 102),
            array('name' => "Sulawesi Tenggara", 'country_id' => 102),
            array('name' => "Sulawesi Utara", 'country_id' => 102),
            array('name' => "Sumatera Barat", 'country_id' => 102),
            array('name' => "Sumatera Selatan", 'country_id' => 102),
            array('name' => "Sumatera Utara", 'country_id' => 102),
            array('name' => "Yogyakarta", 'country_id' => 102)
        );
            DB::table('states')->insert($states);
    }
}
