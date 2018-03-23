<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HocaSaat extends Model
{
    protected $table = 'HocaSaat';

    protected $fillable = ['gun_id','saat_id','hoca_id'];

    public function hoca(){
        return $this->belongsTo('App\User','hoca_id','id');
    }

    public function gun(){
        return $this->belongsTo('App\Model\Gunler','gun_id','id');
    }

    public function saat(){
        return $this->belongsTo('App\Model\Zamanlar','saat_id','id');
    }

}
