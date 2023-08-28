<header class="Header">
    <div class="Header-Logo-Enterprise">
            @if ($logo)
                <!--<img src="{{-- asset('logos/' . $logo->last()) --}}" alt="logo" width="100">-->
                <img src="{{ secure_asset('logos/' . $logo->last()) }}" alt="logo" width="100">
            @endif
    </div>
    <div class="Header-Logo-User">
        <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png">
    </div>
</header>
