<nav class="menu-principal">
    <div class="menu-referencia">
        <i class="bi bi-list" id="btn-exp"></i>
    </div>
    <ul>
        <li class="menu-item {{ Route::is('Home.show') ? 'ativo' : '' }}">
            <a href="{{route('Home.show')}}" >
                <span class="icon"><i class="bi bi-house"></i></span><!--id de expandir-->
                <span class="text-link">Home</span>
            </a>
        </li>
        <li class="menu-item {{ Route::is('Buses.index') ? 'ativo' : '' }}">
            <a href="{{route('Buses.index')}}">
                <span class="icon"><i class="bi bi-bus-front" ></i></span>
                <span class="text-link">Cadastrar ônibus</span>
            </a>
        </li>
        <li class="menu-item {{ Route::is('Routes.index') ? 'ativo' : '' }}">
            <a href="{{route('Routes.index')}}">
                <span class="icon"><i class="glyphicon glyphicon-road"></i></span>
                <span class="text-link">Rotas</span>
            </a>
        </li>
        <li class="menu-item {{ Route::is('Mcard.index') ? 'ativo' : '' }}">
            <a href="{{route('Mcard.index')}}">
                <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                <span class="text-link">Mucury Card</span>
            </a>
        </li>
        <li class="menu-item {{ Route::is('Event.index') ? 'ativo' : '' }}">
            <a href="{{route('Event.index')}}">
                <span class="icon"><i class="bi bi-exclamation-diamond-fill"></i></span>
                <span class="text-link">Eventos</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('Config.index')}}">
                <span class="icon"><i class="bi bi-gear"></i></span>
                <span class="text-link">Configurações</span>
            </a>
        </li>
    </ul>
</nav>

