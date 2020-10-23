<?php

namespace App\Http\Controllers;

use App\models\Client;
use App\Http\Requests\client\ClientCreateRequest;
use App\Http\Requests\Client\ClientUpdateRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientCreateRequest $request)
    {
        Client::create([
            'name' => $request->name,
            'image' => $request->image ? $request->file('image')->store('public') : "public/no_image.png",
            'identification_number' => $request->identification_number,
            'email' => $request->email,
            'phone' => $request->phone,
            'observations' => $request->observations
        ]);
        return redirect()->route('clients')->with('success', 'Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::FindOrfail($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::FindOrfail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request)
    {
        $client = Client::FindOrfail($request->id);
        $client->name = $request->name;
        $client->image = $request->image ? $request->file('image')->store('public') : $client->image;
        $client->identification_number = $request->identification_number;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->observations = $request->observations;
        $client->update();
        return redirect()->route('clients')->with('success', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $client = Client::FindOrfail($request->id);
        try {
            $client->delete();
            return redirect()->route('clients')->with('success', 'Cliente eliminado correctamente');
        } catch (\Exception $message) {
            return redirect()->route('clients')->with('warning','No puedes eliminar este cliente vinculado a mas de un servicio');
        }
    }
}
