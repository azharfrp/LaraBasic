<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'siswa';
    protected $primaryKey = 'siswa_id';

    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'kelas_id', 'siswa_nama',
    ];

    /*
    || KelasModel merupakan bagian dari SiswaModel
    */
    public function siswaBelongsTo(){
    	return $this->belongsTo('App\Models\KelasModel', 'kelas_id');
    }
}
