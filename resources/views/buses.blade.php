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
            <a class="Option-Menu-Form ativo" href="#" data-target="icon1-content">Cadastrar</a>
            <a class="Option-Menu-Form" href="#" data-target="icon2-content">Editar</a>
        </div>



<!--Tipo-->
    <div class="Page-Form" id="icon1-content">
            <form method="post" class="Form-Padrao" action="{{route('Buses.register')}}">
                @csrf <!-- Token CSRF para proteção contra ataques -->
                <br>
                    <label class="Label-Form" for="name">Placa do ônibus</label>
                    <input class="Input-Form" type="text" name="plate" value="{{old('plate')}}">
                    @error('plate')
                                <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                    <label class="Label-Form" for="name">Modelo do ônibus</label>
                    <input class="Input-Form" type="text" name="model" value="{{old('model')}}">
                    @error('model')
                                <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                    <label class="Label-Form" for="name">Horário de saida</label>
                    <input class="Input-Form" type="time" name="hourLeft" value="{{old('hourLeft')}}">
                    @error('hourLeft')
                                <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                    <label class="Label-Form" for="route_id">Escolha a roa:</label>
                    <select class="Input-Form" name="route_id">
                        @foreach($routes as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                <button class="Button-Form" type="submit">Registrar</button>
                <br>
            </form>
        </div>
    </div>





    @include('./layouts/js')
</body>
</html>
