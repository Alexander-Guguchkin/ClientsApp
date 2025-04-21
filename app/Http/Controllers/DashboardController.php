<?php

namespace App\Http\Controllers;

use App\UsersService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $usersService;
    public function __construct()
    {
        $this->usersService = new UsersService();
    }
    public function index(){
        $users = $this->usersService->getAllUsers();
        $clients = $this->usersService->getNewUsers();
        return view('dashboard.index', ['users'=>$users, 'newClients'=>$clients]);
    }
}
