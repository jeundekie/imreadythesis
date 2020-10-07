<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evacuation extends Model
{
    //
    protected $fillable = [
        'brgyid', 'disasterid', 'centername', 'centeraddress', 'latitude', 'longitude', 'info', 'capacity'
    ];


}
