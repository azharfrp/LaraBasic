<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AnggotaHobiModel;
use Faker\Factory as Faker;

class AnggotaHobiSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 20; $i++){
            AnggotaHobiModel::create([
                'anggota_id'    => $faker->numberBetween($min = 1, $max = 5), // Mengacu pada 5 anggota yang kita miliki
                'hobi_id'       => $faker->numberBetween($min = 1, $max = 10), // Mengacu pada 10 hobi yang kita miliki
            ]);
        }
    }
}
