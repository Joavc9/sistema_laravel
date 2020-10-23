@extends('layouts.app')
@section('content')
    <div class="col-md-6 m-auto">
        {{-- @include('partials.alerts') --}}
        <h4 class="form-section"><i class="ft-user"></i>Login</h4>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput1">Correo electronico</label>
                    <input type="text" class="form-control" placeholder="Correo electronico" name="email" value="{{old('email')}}">
                    {!! $errors->first('email', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="projectinput2">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    {!! $errors->first('password', '<label id="name-error" class="error" for="name">:message</label>') !!}
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-white btn-block">
                Iniciar sesión
            </button>
        </form>
    </div>
@endsection
