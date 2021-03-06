<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotelrooms extends Model
{
    protected $fillable = ['size', 'type'];

    public function relation()
      {
        return $this->hasMany(Tamagotchi::class);
      }
}
