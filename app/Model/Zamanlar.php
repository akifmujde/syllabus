<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zamanlar extends Model
{
    protected $table = 'zamanlar';

    protected $fillable = ['zaman_araligi'];

    public function hoca_gun()
    {
        return $this->hasMany('App\Model\HocaSaat','saat_id','id');
    }
}
