<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = ['tamagotchi_id', 'user_id', 'room_id'];

   public function bookingRelation() {
      return $this->hasMany(Booking::class);
   }

   }
}
