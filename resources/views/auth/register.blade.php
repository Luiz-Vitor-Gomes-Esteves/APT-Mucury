<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite([ 'resources/css/app.css'])
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body class="body-login">

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">Cadastrar</h2>
                    <p class="text-white-50 mb-5">Insira seu nome, email e senha</p>
<!--Entrada-->
                <form action="{{route('User.register')}}" method="POST" enctype="multipart/form-data">
                @csrf <!--Impede de avançar se preencher nada-->
                    <div class="form-outline form-white mb-4">
                      <input type="text" class="form-control form-control-lg"  name="name" value="{{old('name')}}"/>
                      <label class="form-label" for="typeEmailX">Nome</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input type="email"  class="form-control form-control-lg"  name="email" value="{{old('email')}}"/>
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg"  name="password" value="{{old('password')}}"/>
                      <label class="form-label" for="typePasswordX">Senha</label>
                    </div>

                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu a senha?(inativo)</a></p>

                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Cadastrar Conta</button>
                </form>
<!--Entrada-->
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>

                  </div>

                  <div>
                    <p class="mb-0">Já possui uma conta?<a href="{{route('User.login')}}" class="text-white-50 fw-bold"> Clique aqui</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
