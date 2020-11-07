<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'kelas';
    protected $primaryKey = 'kelas_id';
    
    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'kelas_nama',
    ];

    /*
    || Relasi One to Many
    */
    public function siswaHasMany(){
    	return $this->hasMany('App\Models\SiswaModel', 'kelas_id');
    }
}
