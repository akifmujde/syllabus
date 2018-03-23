<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gunler extends Model
{
    protected $table = 'gunler';

    protected $fillable = ['gun_adi'];

    public function hoca_zaman()
    {
        return $this->hasMany('App\Model\HocaSaat','gun_id','id');
    }
}
