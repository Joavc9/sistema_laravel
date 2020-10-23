<?php

namespace App\Http\Controllers;


use App\Http\Requests\service\ServiceUpdateRequest;
use App\Http\Requests\service\ServiceCreateRequest;
use App\models\Service;
use App\models\TypeService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $client = $id;
        $servicesTypes = TypeService::all();
        return view('services.create', compact('servicesTypes', 'client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateRequest $request)
    {
        Service::create([
            'name' => $request->name,
            'image' => $request->image ? $request->file('image')->store('public') : "public/no_image.png",
            'service_type' => $request->service_type,
            'client' => $request->idClient,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'observations' => $request->observations
        ]);
        return redirect()->route('client.show', ['id' => $request->idClient])->with('success', 'Servicio creado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idClient)
    {
        $client = $id;
        $servicesTypes = TypeService::all();
        $service = Service::FindOrFail($id);
        return view('services.edit', compact('service', 'servicesTypes', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request)
    {
        $service = Service::FindOrfail($request->id);
        $service->name = $request->name;
        $service->image = $request->image ? $request->file('image')->store('public') : $service->image;
        $service->service_type = $request->service_type;
        $service->start_date = $request->start_date;
        $service->end_date = $request->end_date;
        $service->observations = $request->observations;
        $service->update();
        return redirect()->route('client.show', ['id' => $request->idClient])->with('success', 'Servicio actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $service = Service::FindOrfail($request->id);
        $service->delete();
        return redirect()->route('client.show', ['id' => $request->idClient])->with('success', 'Servicio eliminado correctamente');
    }
}
