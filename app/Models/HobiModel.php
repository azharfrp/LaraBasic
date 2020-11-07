<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'hobi';
    protected $primaryKey = 'hobi_id';

    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'hobi_nama',
    ];

    /*
    || Relasi Many to Many
    */
    public function anggotaBelongsToMany(){
    	return $this->belongsToMany('App\Models\AnggotaModel');
    }
}
