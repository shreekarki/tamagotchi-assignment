<?php

namespace App\Policies;

use App\User;
use App\Tamagotchi;

use Illuminate\Auth\Access\HandlesAuthorization;

class AuthorizationPolicy
{
    use HandlesAuthorization;

    public $user;
    public $tamagotchi;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(User $user, Tamagotchi $tamagotchi )
    {
       $this->user = $user;
       $this->tamagotchi = $tamagotchi;
    }

    public function update(User $user, Tamagotchi $tamagotchi)
     {
     return $user->id === $tamagotchi->user_id;
     }

    public function delete(User $user, Tamagotchi $tamagotchi)
    {
      return $user->id === $tamagotchi->user_id;
    }
}
