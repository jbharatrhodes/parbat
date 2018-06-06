<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table= "event";
    protected $fillable = ['eventName', 'eventDesc','vdcid', 'overseasid', 'eventDate', 'eventTime','image','eventLocation','eventContact' ];
    //
}
