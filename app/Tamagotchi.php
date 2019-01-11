<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamagotchi extends Model
{
    protected $fillable = ['name', 'age', 'coins', 'level','health','boredom', 'state'  ];

    public function categories()
        {
            return $this->belongsToOne(Hotelrooms::class);
        }


}

