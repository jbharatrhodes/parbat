<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DCategory extends Model
{
    protected $table= "directoryCategory";
    public function directory()
    {
        return $this->hasMany('App\Directory');
    }
}
