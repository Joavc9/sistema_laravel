@extends('layouts.layout')
@section('content')
    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idClient" value="{{$client}}">
        @csrf
        <div class="col-md-12">
            <h4 class="form-section">Registar servicio</h4>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre del servicio" name="name"
                        value="{{ old('name') }}">
                    {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Imagen</label>
                    <input type="file" class="form-control" name="image">
                    {!! $errors->first('image', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6">
                    <label for="projectinput1">Tipo servicio</label>
                    <select class="form-control" name="service_type">
                        <option value="">Seleccione un tipo servicio</option>
                        @foreach ($servicesTypes as $serviceType)
                            <option value="{{ $serviceType->id }}">{{ $serviceType->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('category', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Fecha inicial</label>
                    <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}">
                    {!! $errors->first('start_date', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Fecha final</label>
                    <input type="date" class="form-control" name="end_date" value="{{ old('end_date') }}">
                    {!! $errors->first('end_date', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="projectinput1">Observaciones</label>
                    <input type="text" class="form-control" placeholder="Observaciones del servicio" name="observations"
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
