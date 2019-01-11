<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotelrooms extends Model
{
    protected $fillable = ['size', 'type'];

    public function categories()
      {
        return $this->hasMany(Hotelrooms::class);
      }
}
