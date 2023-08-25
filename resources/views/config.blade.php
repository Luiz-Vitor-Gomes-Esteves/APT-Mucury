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
            <a class="Option-Menu-Form ativo" href="#" data-target="icon1-content">Sistema</a>
            <a class="Option-Menu-Form" href="#" data-target="icon2-content">Perfil</a>
        </div>



        <div class="Page-Form" id="icon1-content">

            <form method="post" class="Form-Padrao" action="{{route('Config.register')}}"enctype="multipart/form-data">
                @csrf
                <br>
                <label class="Label-Form">Modificar foto da empresa</label>
                    <input class="Input-Form" type="file" name="logo" value="{{old('logo')}}">
                <br>
                <label class="Label-Form">Selecione a cor principal</label>
                    <div>
                        <input class="" type="radio" name="color" value="blue" {{old('color')=='blue'?'checked':''}}>
                            <label for="Retirar1">Azul</label>
                    </div>
                    <div>
                        <input class="" type="radio" name="color" value="red" {{old('color')=='red'?'checked':''}}>
                            <label for="Retirar1">Vermelho</label>
                    </div>
                    <div>
                        <input class="" type="radio" name="color" value="green" {{old('color')=='green'?'checked':''}}>
                            <label for="Retirar1">Verde</label>
                    </div>
                <br>
                <label class="Label-Form">Dark Mode</label>
                    <input type="checkbox" name="darkMode" value="{{old('darkMode')}}">
                <br>
                    <button class="Button-Form" type="submit">Salvar</button>
            </form>






        </div>




        <div class="Page-Form hidden" id="icon2-content">
            <form method="post" class="Form-Padrao" action="{{route('User.update')}}">
                @csrf
                <label class="Label-Form">Modificar foto de perfil</label>
                    <input class="Input-Form" type="file" name="photo" value="{{old('photo')}}">
                <br>
                <button class="Button-Form" type="submit">Salvar</button>
            </form>
        </div>
    </div>





    @include('./layouts/js')
</body>
</html>
