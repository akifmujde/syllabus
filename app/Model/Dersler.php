<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dersler extends Model
{
    protected $table = 'dersler';

    protected $fillable = ['ders_adi','ders_slug','ders_saati'];

    public function hocalar(){
        return $this->hasMany('App\Model\DersHoca' , 'ders_id' ,'id');
    }
}
