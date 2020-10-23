@extends('layouts.layout')
@section('content')
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Registar Clientes</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre del cliente" name="name"
                        value="{{ old('name') }}">
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
                        value="{{ old('identification_number') }}">
                    {!! $errors->first('identification_number', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Correo eléctronico</label>
                    <input type="email" class="form-control" placeholder="Correo electrónico del cliente" name="email"
                        value="{{ old('email') }}">
                    {!! $errors->first('email', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Teléfono</label>
                    <input type="number" class="form-control" placeholder="Teléfono del cliente" name="phone"
                        value="{{ old('phone') }}">
                    {!! $errors->first('phone', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Observaciones</label>
                    <input type="text" class="form-control" placeholder="Observaciones del cliente" name="observations"
                        value="{{ old('observations') }}">
                    {!! $errors->first('observations', '<label id="name-error" class="error" for="name">:message</label>')
                    !!}
                </div>
            </div>
            <div class="form-actions text-right">
                <button type="submit" class="btn btn-warning">
                    Registrar
                </button>
            </div>
        </div>
    </form>
@endsection
