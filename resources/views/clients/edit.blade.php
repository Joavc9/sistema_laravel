@extends('layouts.layout')
@section('content')
    <form action="{{ route('client.update') }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $client->id }}">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Editar Cliente</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre del cliente" name="name"
                        value="{{ $client->name }}">
                    {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Imagen</label>
                    <input type="file" class="form-control" name="image">
                    {!! $errors->first('image', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Cédula</label>
                    <input type="number" class="form-control" placeholder="Cédula del cliente" name="identification_number"
                        value="{{ $client->identification_number }}">
                    {!! $errors->first('identification_number', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Correo eléctronico</label>
                    <input type="email" class="form-control" placeholder="Correo electrónico del cliente" name="email"
                        value="{{ $client->email }}">
                    {!! $errors->first('email', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Teléfono</label>
                    <input type="number" class="form-control" placeholder="Teléfono del cliente" name="phone"
                        value="{{ $client->phone }}">
                    {!! $errors->first('phone', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Observaciones</label>
                    <input type="text" class="form-control" placeholder="Observaciones del cliente" name="observations"
                        value="{{ $client->observations }}">
                    {!! $errors->first('observations', '<label id="name-error" class="error" for="name">:message</label>')
                    !!}
                </div>
            </div>
            <div class="form-actions text-right">
                <button type="submit" class="btn btn-warning">
                    Actualizar
                </button>
            </div>
        </div>
    </form>
@endsection
