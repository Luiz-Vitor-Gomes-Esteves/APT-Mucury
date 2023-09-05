<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATPMucury | MucuryCard</title>
    @include('./layouts/css')
</head>
<body class="Standart-Background">
    @include('./layouts/menu')

    @include('./layouts/header')


    <div class="Cadastrar-Form">
        <div class="Menu-Form">
            <a class="Option-Menu-Form ativo" href="#" data-target="icon1-content">Tipo</a>
            <a class="Option-Menu-Form" href="#" data-target="icon2-content">Cadastrar</a>
            <a class="Option-Menu-Form" href="#" data-target="icon3-content">Editar</a>
        </div>



<!--Tipo-->
    <div class="Page-Form" id="icon1-content">
        <form method="post" class="Form-Padrao" action="{{route('Mcard.register')}}">
            @csrf <!-- Token CSRF para proteção contra ataques -->
            <label class="Label-Form" for="type">Tipo de cartao</label>
            <input class="Input-Form" type="text" name="type" value="{{old('type')}}">
            @error('type')
                        <span class="error-message">O campo é obrigatório.</span>
            @enderror
            <br>
            <button class="Button-Form" type="submit">Registrar</button>
            <br>
        </form>
    </div>
<!--MCard-->
<div class="Page-Form hidden" id="icon2-content">
            <form method="post" class="Form-Padrao" action="{{route('Mcard.register')}}">
                @csrf <!-- Token CSRF para proteção contra ataques -->
                <label class="Label-Form" for="mcard_type_id">Tipo:</label>
                    <select class="Input-Form" name="mcard_type_id">
                        @foreach($mcardTypes as $id => $type)
                            <option value="{{ $id }}">{{ $type }}</option>
                        @endforeach
                    </select>
                <br>
                <br>
                    <label class="Label-Form" for="cod">Codigo</label>
                    <input class="Input-Form" type="integer" name="cod" value="{{old('cod')}}">
                    @error('cod')
                                <span class="error-message">O campo é obrigatório.</span>
                    @enderror

                <br>
                    <label class="Label-Form" for="dateEmission">Data de Emissão</label>
                    <input class="Input-Form-Temp" type="date" name="dateEmission" value="{{old('dateEmission')}}">
                    @error('dateEmission')
                                <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                    <label class="Label-Form" for="credits">Deposite os créditos</label>
                    <input class="Input-Form" type="float" name="credits" value="{{old('credits')}}">
                    @error('credits')
                                <span class="error-message">O campo é obrigatório.</span>
                    @enderror
                <br>
                    <label class="Label-Form" for="user_id">Usuario:</label>
                        <select class="Input-Form" name="user_id">
                            @foreach($users as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                <br>
                <button class="Button-Form" type="submit">Registrar</button>
                <br>
            </form>
        </div>
    </div>




    @include('./layouts/js')
</body>
</html>
