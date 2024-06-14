<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechForge Forum</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="{{ url('style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</head>

<body class="fundo">
    <header>

<!-- LOGO -->
        <div class="containner center logo" style="background-color: #181818">
            <img src="{{ url('logo.png')}}">
        </div>


<!-- NavBar Section -->
<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #1f1e1e; padding: 0px">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">TechForge</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active fa fa-home" aria-current="page" href="{{ url('/') }}"> Inicio</a>
                </li>
            </ul>
    @auth
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
        <ul class="navbar-nav float-end">
          <li class="nav-item dropdown">
            <button class="btn btn-secondary text-light dropdown-toggle" style="background-color: #1f1e1e;" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0px">
            <img src="{{ url('images/img_avatar.png') }}" class="rounded-circle" height="40" alt="Avatar" loading="lazy" />
            nome.usuario
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fa fa-user" href="#"> Perfil</a></li>
              <li><a class="dropdown-item fa fa-plus" href="{{ url('/postagem/create') }}"> Nova Postagem</a></li></li>
              <li><hr class="dropdown-divider"></li>
              <!-- SOMENTE ADM -->
              <li><a class="dropdown-item text-info fa fa-unlock-alt" href="{{ url('/home') }}"> ADMIN LTE</a></li>
              <!----------------->
              <li><a class="dropdown-item text-danger fa fa-sign-out" href="#"> SAIR</a></li>
            </ul>
          </li>
        </ul>
      </div>
    @endauth

    @guest
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ url('/home') }}"><button type="button" class="btn btn-secondary text-light fa fa-sign-in" style="background-color: #1f1e1e"> Entrar</button></a>
        <a href="{{ url('/register') }}"><button type="button" class="btn btn-secondary text-light fa fa-user" style="background-color: #1f1e1e"> Registrar</button></a>
    </div>
    @endguest

</nav>

 </header>
<!-- #NavBar Section# -->


    <!-- Main Content -->
    @yield('content')



<!-- Footer Section -->
    <footer class=" text-white text-center text-lg-start mt-4" style="background-color: #1f1e1e;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase"><i class="fa fa-bar-chart"></i> Estatística do blog</h5>
                    <p>
                        <span>***<!-- $count_postagem --> Postagens feitas por ***<!-- $count_user -->  Usuário.</span><br>
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 TechForge Forum
            <div class="mt-2">
                <a href="https://github.com/rafaelVitorino1/TechForge" class="text-white me-3">
                    <i class="fa fa-github" style="font-size: 50px;"></i>
                </a>
            </div>
        </div>
    </footer>
<!-- #Footer Section# -->

</body>
</html>
