<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MapelModel;

class MapelSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        for($i = 1; $i <= 10; $i++){
            MapelModel::create([
                'guru_id'       => $i,
                'mapel_nama'    => 'Mata Pelajaran ' . $i,
            ]);
        }
    }
}
