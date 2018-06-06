<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $fillable=['tags'];
    public function news()
    {
        return $this->belongsToMany('App\news');
    }
}
