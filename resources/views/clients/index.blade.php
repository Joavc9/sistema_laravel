@extends('layouts.layout')
@section('content')
    <div class="col-md-12">
        <a class="btn-primary btn" href="{{route('client.create')}}">Crear cliente</a>
        <div class="card-body">
            <table class="table" id="clients">
                <thead>
                    <th>Nombre</th>
                    <th>imagen</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Observaciones</th>
                    <th style="width: 25%">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td><img src="{{ Storage::url($client->image) }}" alt="" width="40px"></td>
                            <td>{{ $client->identification_number }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->observations }}</td>
                            <td>
                                <div>
                                    <a class="btn btn-info btn-sm" href="{{ route('client.show', $client->id) }}">Ver detalle</a>
                                    <a class="btn btn-info btn-sm" href="{{ route('client.edit', $client->id) }}">Editar</a>
                                    <a class="btn btn-danger btn-sm" data-id="{{$client->id}}" data-url="{{route('client.delete')}}" data-form="" onclick="deleteRegister(this)">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
