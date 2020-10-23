<div class="col-md-12">
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('clients') }}">Clientes</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false" href="#}">{{ auth()->user()->name }}</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('form-logoout').submit()">Cerrar sesion</a>
            </div>
        </li>
    </ul>
    <form method="POST" id="form-logoout" action="{{ route('logout') }}" style="display:none">
        @csrf
    </form>
</div>
