<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $table= "directory";
    public function directoryCat()
    {
        return $this->hasMany('App\DCategory');
    }
}
