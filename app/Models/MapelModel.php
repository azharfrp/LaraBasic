<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'mapel';
    protected $primaryKey = 'mapel_id';

    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'guru_id', 'mapel_nama',
    ];

    /*
    || GuruModel merupakan bagian dari MapelModel
    */
    public function guruBelongsTo(){
    	return $this->belongsTo('App\Models\GuruModel', 'guru_id');
    }

    public function guruHasMany(){
    	return $this->hasMany('App\Models\MapelModel', 'guru_id');
    }
}
