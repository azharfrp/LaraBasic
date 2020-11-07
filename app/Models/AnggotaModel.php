<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'anggota';
    protected $primaryKey = 'anggota_id';

    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'anggota_nama',
    ];

    /*
    || Relasi Many to Many
    */
    public function hobiBelongsToMany(){
        return $this->belongsToMany('App\Models\HobiModel', 'App\Models\AnggotaHobiModel', 'anggota_id', 'hobi_id');
   }
}
