<header class="Header">
    <div class="Header-Logo-Enterprise">
            @if ($logo)
                <img src="{{ asset('logos/' . $logo->last()) }}" alt="logo" width="100">
            @endif
    </div>
    <div class="Header-Logo-User">
        <img src="https://i.redd.it/e4mus9ykczq51.jpg">
    </div>
</header>
