<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $dates = ['updated_at'];
    protected $fillable = ['newsTitle', 'newsDesc','vdcInfo_id', 'category_id','isLatest', 'isSlider','newsBy','created_at','published','feature' , 'views', 'feature_small','feature_medium', 'source', 'overseas_id' ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function vdcInfo()
    {
        return $this->belongsTo('App\vdcInfo');
    }

    public function tags()
    {
        return $this->belongsToMany('App\tags');
    }
}
