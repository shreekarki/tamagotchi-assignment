<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookingPolicy
{
    use HandlesAuthorization;
    public $user;
    public $booking;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(User $user, Booking $booking )
    {
        $this->user = $user;
        $this->booking = $booking;
    }

    public function update(User $user,  Booking $booking)
      {
         return $user->id === $booking->user_id;
      }

    public function delete(User $user,  Booking $booking)
      {
          return $user->id === $booking->user_id;
      }

}
