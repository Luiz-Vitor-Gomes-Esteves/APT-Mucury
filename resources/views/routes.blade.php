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
            <a class="Option-Menu-Form ativo" href="#" data-target="icon1-content">Cadastrar Rota</a>
            <a class="Option-Menu-Form" href="#" data-target="icon2-content">Editar</a>
        </div>

<!--Tipo-->
    <div class="Page-Form" id="icon1-content">
        <div class="Page-Form" id="icon1-content">
            <form method="post" class="Form-Padrao" action="{{route('Routes.register')}}">
                @csrf <!-- Token CSRF para proteção contra ataques -->
                <br>
                    <label class="Label-Form" for="name">Nome da rota</label><br>
                    <input class="Input-Form" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                <label class="Label-Form" for="name">Horario de início de funcionamento</label><br>
                <input class="Input-Form-Temp" type="time" name="timeStart" value="{{old('timeStart')}}">
                    @error('name')
                        <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                <label class="Label-Form" for="name">Horario de final de funcionamento</label><br>
                <input class="Input-Form-Temp" type="time" name="timeEnd" value="{{old('timeEnd')}}">
                    @error('name')
                        <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                <button class="Button-Form" type="submit">Registrar</button>
                <br>
        </form>




        </div>
    </div>




    @include('./layouts/js')
</body>
</html>
