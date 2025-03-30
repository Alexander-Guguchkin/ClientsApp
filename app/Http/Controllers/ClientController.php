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

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'string',
            'contact' => 'string'
        ]);
        Client::create($validated);
        return redirect()->route('clients.index');
    }

    public function edit(Client $clients)
    {
        return view('clients.edit', ['clients' => $clients]);
    }

    public function update(Request $request, Client $clients)
    {
        $validated = $request->validate([
            'username' => 'string',
            'contact' => 'string'
        ]);

        $clients->update($validated);
        return redirect()->route('clients.index');
    }
    public function destroy(Client $clients)
    {
        $clients->delete();
        return redirect()->route('clients.index');
    }
}
