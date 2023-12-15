<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('countries')->delete();
            $countries = array(
            array('id' => 102, 'code' => 'ID', 'name' => "Indonesia", 'phonecode' => 62),
            );
            DB::table('countries')->insert($countries);
        }
}
