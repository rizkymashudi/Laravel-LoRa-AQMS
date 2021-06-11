<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payload extends Model
{
    protected $guarded = [];
    protected $table = 'aqms_db.sensor_data';

    public $timestamps = false;
    
}
