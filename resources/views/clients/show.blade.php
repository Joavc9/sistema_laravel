@extends('layouts.layout')
@section('content')
    <div class="col-md-12">
        <h4 class="form-section">detalle cliente</h4>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ Storage::url($client->image) }}" alt="" width="150px">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-group col-md-6 mb-2">
                        <label for="projectinput1">Nombre</label>
                        <input disabled type="text" class="form-control" placeholder="Nombre del cliente" name="name"
                            value="{{ $client->name }}">
                        {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label for="projectinput1">Cédula</label>
                        <input disabled type="number" class="form-control" placeholder="Cédula del cliente"
                            name="identification_number" value="{{ $client->identification_number }}">
                        {!! $errors->first('identification_number', '<label id="name-error" class="error"
                            for="name">:message</label>') !!}
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label for="projectinput1">Correo eléctronico</label>
                        <input disabled type="email" class="form-control" placeholder="Correo electrónico del cliente"
                            name="email" value="{{ $client->email }}">
                        {!! $errors->first('email', '<label id="name-error" class="error" for="name">:message</label>') !!}
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label for="projectinput1">Teléfono</label>
                        <input disabled type="number" class="form-control" placeholder="Teléfono del cliente" name="phone"
                            value="{{ $client->phone }}">
                        {!! $errors->first('phone', '<label id="name-error" class="error" for="name">:message</label>') !!}
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label for="projectinput1">Observaciones</label>
                        <input disabled type="text" class="form-control" placeholder="Observaciones del cliente"
                            name="observations" value="{{ $client->observations }}">
                        {!! $errors->first('observations', '<label id="name-error" class="error"
                            for="name">:message</label>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        @if (count($client->getServices) > 0)
            <div class="card-body">
                <table class="table" id="services">
                    <thead>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th style="width: 15%">Tipo servicio</th>
                        <th>Fecha inicial</th>
                        <th>Fecha final</th>
                        <th>Observaciones</th>
                        <th style="width: 15%">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($client->getServices as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td><img src="{{ Storage::url($service->image) }}" alt="" width="40px"></td>
                                <td>{{ $service->getTypeService->name }}</td>
                                <td>{{ $service->start_date }}</td>
                                <td>{{ $service->end_date }}</td>
                                <td>{{ $service->observations }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('service.edit', ['id' => $service->id, 'idClient' => $client->id]) }}">Editar</a>
                                        <a class="btn btn-danger btn-sm" data-id="{{ $service->id }}"
                                            data-idclient="{{ $client->id }}" data-url="{{ route('service.delete') }}"
                                            data-form="" onclick="deleteRegister(this)">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn-primary btn" href="{{ route('service.create', $client->id) }}">Crear servicio</a>
            </div>
        @else
            <div class="card-header p-4 text-center">
                <h3 class="text-center">Este cliente no tiene servicios registrados</h3>
                <a class="btn-primary btn" href="{{ route('service.create', $client->id) }}">Crear servicio</a>
            </div>
        @endif
    </div>
@endsection
