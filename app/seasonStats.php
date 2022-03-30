<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seasonStats extends Model
{
    protected $fillable = [
        'farmerName',
        'season',
        'hectrage',
        'crop1',
        'crop2',
        'crop3',
        'crop4',
        'crop5',
        'crop6',
        'crop7',
    ];
}
