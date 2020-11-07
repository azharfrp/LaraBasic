<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KelasModel;
use Faker\Factory as Faker;

class KelasSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 6; $i++){
            KelasModel::create([
                'kelas_nama' => 'Kelas ' . $i,
            ]);
        }
    }
}
