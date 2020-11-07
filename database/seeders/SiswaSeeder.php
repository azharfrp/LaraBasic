<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiswaModel;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 100; $i++){
            SiswaModel::create([
                'kelas_id'      => $faker->numberBetween($min = 1, $max = 6), // Mengacu pada 6 kelas yang kita miliki
                'siswa_nama'    => $faker->name,
            ]);
        }
    }
}
