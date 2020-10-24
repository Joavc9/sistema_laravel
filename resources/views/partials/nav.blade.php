<div class="col-md-12">
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('clients') }}">Clientes</a>
        </li>
        @if (auth()->user())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false" href="#">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('form-logoout').submit()">Cerrar sesion</a>
                </div>
            </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
            </li>
        @endif
    </ul>
    <form method="POST" id="form-logoout" action="{{ route('logout') }}" style="display:none">
        @csrf
    </form>
</div>
