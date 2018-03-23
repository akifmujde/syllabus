<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DersHoca extends Model
{
    protected $table = 'DersHoca';

    protected $fillable = ['ders_id','hoca_id'];

    public function ders(){
        return $this->belongsTo('App\Model\Dersler','ders_id' ,'id');
    }

    public function hoca(){
        return $this->belongsTo('App\User','hoca_id' ,'id');
    }
}
