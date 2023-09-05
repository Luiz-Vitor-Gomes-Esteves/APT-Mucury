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
        <li class="menu-item {{ Route::is('User.index') ? 'ativo' : '' }}">
            <a href="{{route('User.index')}}" >
                <span class="icon"><i class="bi bi-people-fill"></i></span><!--id de expandir-->
                <span class="text-link">Usuários</span>
            </a>
        </li>
        <li class="menu-item {{ Route::is('Suport.index') ? 'ativo' : '' }}">
            <a href="{{route('Support.index')}}" >
                <span class="icon"><i class="bi bi-wechat"></i></span><!--id de expandir-->
                <span class="text-link">Suporte</span>
            </a>
        </li>
        <li class="menu-item {{ Route::is('Config.index') ? 'ativo' : '' }}">
            <a href="{{route('Config.index')}}">
                <span class="icon"><i class="bi bi-gear"></i></span>
                <span class="text-link">Configurações</span>
            </a>
        </li>
    </ul>
</nav>

