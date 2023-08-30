<header class="Header">
    <div class="Header-Logo-Enterprise">
            @if ($logo)
            <!--img src="{{--asset('storage/' . 'logos/UiQ2Rwy0KcxabUrGMUi3UN0xWWKcOuubU9fEVtJ5.jpg')--}}" alt="logo" width="100"-->
            <img src="{{secure_asset('storage/' . 'logos/UiQ2Rwy0KcxabUrGMUi3UN0xWWKcOuubU9fEVtJ5.jpg')}}" alt="logo" width="100">
                {{-- 'logos/'.$logo --}}
            @endif
    </div>
    <div class="Header-Logo-User">
        <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png">
    </div>
</header>
