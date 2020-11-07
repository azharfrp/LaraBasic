<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HobiModel;

class HobiSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        for($i = 1; $i <= 10; $i++){
            HobiModel::create([
                'hobi_nama' => 'Hobi ' . $i,
            ]);
        }
    }
}
