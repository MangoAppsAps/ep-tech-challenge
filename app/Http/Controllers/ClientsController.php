<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\NewClientRequest;
use Auth;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Auth::user()->clients;

        foreach ($clients as $client) {
            $client->append('bookings_count');
        }

        if (request()->expectsJson()) {
            return $clients;
        }

        return view('clients.index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function show($client)
    {
        $client = Client::where('id', $client)->with('bookings')->first();

        return view('clients.show', ['client' => $client]);
    }

    public function store(NewClientRequest $request)
    {
        $client = new Client;
        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->adress = $request->get('adress');
        $client->city = $request->get('city');
        $client->postcode = $request->get('postcode');
        $client->save();

        return $client;
    }

    public function destroy($client)
    {
        Client::where('id', $client)->delete();

        return 'Deleted';
    }
}
