<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\GuruModel;

class GuruSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            GuruModel::create([
                'guru_nama' => $faker->name,
            ]);
        }
    }
}
