<?php

namespace App;

use App\Models\Client;
use Carbon\Carbon;

class UsersService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllUsers()
    {
        $users = count(Client::all());
        return $users;
    }
    // если дата создания равна сегодняшней,
    // то это новый пользователь в противном случае пропускаем запрос
    public function getNewUsers()
    {
        $today = Carbon::today();
        return Client::whereDate('created_at', $today)->count();
    }
}
