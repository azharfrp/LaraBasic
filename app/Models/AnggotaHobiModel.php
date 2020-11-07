<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaHobiModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'anggota_hobi';
    protected $primaryKey = 'anggota_hobi_id';

    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'anggota_id', 'hobi_id',
    ];
}
