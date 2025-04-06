<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index(){
        $users = Client::all();
        return view('dashboard.index', ['users'=>count($users)]);
    }
}
