<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vdcInfo extends Model
{
    protected $table= "vdcInfo";
    public function news()
    {
        return $this->hasMany('App\news');
    }
}
