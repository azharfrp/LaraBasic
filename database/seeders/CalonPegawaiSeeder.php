<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CalonPegawaiSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('en_EN');
        for($i = 1; $i <= 1000; $i++){
            DB::table('calonpegawai')->insert([
                'nama'      => $faker->name,
                'umur'      => $faker->numberBetween(16,50),
                'alamat'    => $faker->address,
                'posisi'    => $faker->jobTitle,
            ]);
        }
    }
}