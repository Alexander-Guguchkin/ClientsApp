<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', ['clients' => Client::paginate(10)]);
    }

    public function create ()
    {
        return view('clients.create');
    }

    public function store (Request $request)
    {
        $validated = $request->validate([
            'username' => 'string',
            'contact' => 'string'
        ]);
        if($validated){
            Client::create($validated);
            return redirect()->route('clients.index')->with('success', 'Клиент успешно создан');
        }
        return redirect()->route('clients.create')->with('error', 'Ошибка при создании клиента');;
    }
}
