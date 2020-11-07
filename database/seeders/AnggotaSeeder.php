<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AnggotaModel;
use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            AnggotaModel::create([
                'anggota_nama' => $faker->name,
            ]);
        }
    }
}
