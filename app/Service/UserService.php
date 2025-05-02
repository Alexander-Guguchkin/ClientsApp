<?php

namespace App\Service;

use App\Models\User;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function  createUser($validated){
        User::create($validated);
    }

    public function updateUser($validated, $user){
        $user->update($validated);
    }
}
