<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model{
    use HasFactory;

    /*
    || Informasi table
    */
    protected $table = 'guru';
    protected $primaryKey = 'guru_id';

    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'guru_nama',
    ];

    /*
    || Relasi One to One
    */
    public function mapelHasOne(){
    	return $this->hasOne('App\Models\MapelModel', 'guru_id');
    }

    public function mapelBelongsTo(){
    	return $this->belongsTo('App\Models\MapelModel', 'guru_id');
    }
}
