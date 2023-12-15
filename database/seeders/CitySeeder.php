<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->delete();
        $cities = array(
            array('name' => "Banda Aceh", 'state_id' => 1666),
            array('name' => "Bireun", 'state_id' => 1666),
            array('name' => "Langsa", 'state_id' => 1666),
            array('name' => "Lhokseumawe", 'state_id' => 1666),
            array('name' => "Meulaboh", 'state_id' => 1666),
            array('name' => "Denpasar", 'state_id' => 1667),
            array('name' => "Karangasem", 'state_id' => 1667),
            array('name' => "Klungkung", 'state_id' => 1667),
            array('name' => "Kuta", 'state_id' => 1667),
            array('name' => "Negara", 'state_id' => 1667),
            array('name' => "Singaraja", 'state_id' => 1667),
            array('name' => "Tabanan", 'state_id' => 1667),
            array('name' => "Ubud", 'state_id' => 1667),
            array('name' => "Manggar", 'state_id' => 1668),
            array('name' => "Mentok", 'state_id' => 1668),
            array('name' => "Pangkal Pinang", 'state_id' => 1668),
            array('name' => "Sungai Liat", 'state_id' => 1668),
            array('name' => "Tanjung Pandan", 'state_id' => 1668),
            array('name' => "Toboali-Rias", 'state_id' => 1668),
            array('name' => "Cikupa", 'state_id' => 1669),
            array('name' => "Cilegon", 'state_id' => 1669),
            array('name' => "Ciputat", 'state_id' => 1669),
            array('name' => "Curug", 'state_id' => 1669),
            array('name' => "Kresek", 'state_id' => 1669),
            array('name' => "Labuhan", 'state_id' => 1669),
            array('name' => "Pandegelang", 'state_id' => 1669),
            array('name' => "Pondok Aren", 'state_id' => 1669),
            array('name' => "Rangkasbitung", 'state_id' => 1669),
            array('name' => "Serang", 'state_id' => 1669),
            array('name' => "Serpong", 'state_id' => 1669),
            array('name' => "Tangerang", 'state_id' => 1669),
            array('name' => "Teluknaga", 'state_id' => 1669),
            array('name' => "Bengkulu", 'state_id' => 1670),
            array('name' => "Curup", 'state_id' => 1670),
            array('name' => "Gandaria", 'state_id' => 1671),
            array('name' => "Gorontalo", 'state_id' => 1672),
            array('name' => "Cengkareng", 'state_id' => 1673),
            array('name' => "Jakarta", 'state_id' => 1673),
            array('name' => "Jambi", 'state_id' => 1674),
            array('name' => "Kualatungka", 'state_id' => 1674),
            array('name' => "Simpang", 'state_id' => 1674),
            array('name' => "Sungaipenuh", 'state_id' => 1674),
            array('name' => "Kendal", 'state_id' => 1682),
            array('name' => "Bandar Lampung", 'state_id' => 1683),
            array('name' => "Kota Bumi", 'state_id' => 1683),
            array('name' => "Metro", 'state_id' => 1683),
            array('name' => "Pringsewu", 'state_id' => 1683),
            array('name' => "Terbanggi Besar", 'state_id' => 1683),
            array('name' => "Amahai", 'state_id' => 1684),
            array('name' => "Ambon", 'state_id' => 1684),
            array('name' => "Tual", 'state_id' => 1684),
            array('name' => "Amahai", 'state_id' => 1685),
            array('name' => "Ambon", 'state_id' => 1685),
            array('name' => "Tual", 'state_id' => 1685),
            array('name' => "Aberpura", 'state_id' => 1688),
            array('name' => "Biak", 'state_id' => 1688),
            array('name' => "Jaya Pura", 'state_id' => 1688),
            array('name' => "Manokwari", 'state_id' => 1688),
            array('name' => "Merauke", 'state_id' => 1688),
            array('name' => "Sorong", 'state_id' => 1688),
            array('name' => "Balaipungut", 'state_id' => 1689),
            array('name' => "Bengkalis", 'state_id' => 1689),
            array('name' => "Dumai", 'state_id' => 1689),
            array('name' => "Duri", 'state_id' => 1689),
            array('name' => "Pekan Baru", 'state_id' => 1689),
            array('name' => "Selatpanjang", 'state_id' => 1689),
            array('name' => "Tanjung Balai-Meral", 'state_id' => 1689),
            array('name' => "Tembilahan", 'state_id' => 1689),
            array('name' => "Balaipungut", 'state_id' => 1690),
            array('name' => "Bengkalis", 'state_id' => 1690),
            array('name' => "Dumai", 'state_id' => 1690),
            array('name' => "Duri", 'state_id' => 1690),
            array('name' => "Pekan Baru", 'state_id' => 1690),
            array('name' => "Selatpanjang", 'state_id' => 1690),
            array('name' => "Tanjung Balai-Meral", 'state_id' => 1690),
            array('name' => "Tembilahan", 'state_id' => 1690),
            array('name' => "Solo", 'state_id' => 1691),
            array('name' => "Bambanglipuro", 'state_id' => 1699),
            array('name' => "Banguntapan", 'state_id' => 1699),
            array('name' => "Bantul", 'state_id' => 1699),
            array('name' => "Depok", 'state_id' => 1699),
            array('name' => "Gamping", 'state_id' => 1699),
            array('name' => "Godean", 'state_id' => 1699),
            array('name' => "Jetis", 'state_id' => 1699),
            array('name' => "Kasihan", 'state_id' => 1699),
            array('name' => "Ngaglik", 'state_id' => 1699),
            array('name' => "Pandak", 'state_id' => 1699),
            array('name' => "Pundong", 'state_id' => 1699),
            array('name' => "Sewon", 'state_id' => 1699),
            array('name' => "Seyegan", 'state_id' => 1699),
            array('name' => "Sleman", 'state_id' => 1699),
            array('name' => "Srandakan", 'state_id' => 1699),
            array('name' => "Wonosari", 'state_id' => 1699),
            array('name' => "Yogyakarta", 'state_id' => 1699),
                );
            DB::table('cities')->insert($cities);
    }
}
