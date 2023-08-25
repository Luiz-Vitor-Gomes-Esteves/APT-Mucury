<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('./layouts/css')
</head>
<body class="Standart-Background">
    @include('./layouts/menu')


    @include('./layouts/header')


    <div class="Cadastrar-Form">
        <div class="Menu-Form">
            <a class="Option-Menu-Form ativo" href="#" data-target="icon1-content">Cadastrar Tipo</a>
            <a class="Option-Menu-Form" href="#" data-target="icon2-content">Cadastrar Evento</a>
            <a class="Option-Menu-Form" href="#" data-target="icon3-content">Editar</a>
        </div>



<!--Causalidade-->
        <div class="Page-Form" id="icon1-content">
            <form method="post" class="Form-Padrao" action="{{route('Event.registerCausality')}}">
                @csrf <!-- Token CSRF para proteção contra ataques -->
                <br>
                <label class="Label-Form"  for="type">Insira a Causalidade</label>
                    <input class="Input-Form" type="text" name="type" value="{{old('type')}}">
                <br>
                <button class="Button-Form" type="submit">Registrar</button>
                <br>
            </form>
        </div>
<!--Evento-->
        <div class="Page-Form hidden" id="icon2-content">
            <form method="post" class="Form-Padrao" action="{{route('Event.registerEvent')}}">
                @csrf <!-- Token CSRF para proteção contra ataques -->
                <label class="Label-Form" for="bus_id">Onibus:</label>
                    <select class="Input-Form" name="bus_id">
                        @foreach($bus as $id => $plate)
                            <option value="{{ $id }}">{{ $plate }}</option>
                        @endforeach
                    </select>
                <br>
                <label class="Label-Form" for="route_id">Rota:</label>
                    <select class="Input-Form" name="route_id">
                        @foreach($routes as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                <br>
                <label class="Label-Form" for="causality_id">Causalidade:</label>
                    <select class="Input-Form" name="causality_id">
                        @foreach($causality as $id => $type)
                            <option value="{{ $id }}">{{ $type }}</option>
                        @endforeach
                    </select>
                <label class="Label-Form" for="time">Horário</label>
                    <input class="Input-Form-Temp" type="time" name="time" value="{{old('time')}}">
                <br>
                <label class="Label-Form" for="date">Data</label>
                    <input class="Input-Form-Temp" type="date" name="date" value="{{old('date')}}">
                <br>
                <label class="Label-Form" for="local">Local</label>
                    <input class="Input-Form" type="text" name="local" value="{{old('local')}}">
                <br>
                <label class="Label-Form" for="description">Descrição</label>
                    <textarea class="Input-Form" name="description" id="" cols="30" rows="3" value="{{old('description')}}"></textarea>
                <br>
                <button class="Button-Form" type="submit">Registrar</button>
                <br>
            </form>
        </div>
        <div class="Page-Form" id="icon3-content">

        </div>
    </div>
</div>

    @include('./layouts/js')
</body>
</html>
