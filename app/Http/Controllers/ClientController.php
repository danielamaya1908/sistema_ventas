<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::paginate()
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255'
        ]);

        Client::create($data);

        return back()->with('message', 'Client created successfully');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255'
        ]);

        $client->update($data);

        return back()->with('message', 'Client updated.');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return back()->with('message', 'Client deleted.');
    }
}
