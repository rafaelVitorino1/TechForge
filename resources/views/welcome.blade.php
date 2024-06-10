<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechForge Forum</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="{{ url('turbopc.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="fundo">
    <header>

<!-- LOGO -->
        <div class="containner center">
                <img src="logo.png">
        </div>
<!-- NavBar Section -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark container py-0" style="background-color: #1f1e1e;>
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
      <div class="collapse navbar-collapse position-absolute end-0" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    <!-- Botoes(Apenas Logado)-->
    <!-- <div> -->
    <!-- <a href="{{ url('/home') }}"><button type="submit" class="btn btn-success" >Login</button></a> -->
    <!-- <a href="{{ url('/register') }}"><button type="submit" class="btn btn-warning" >Registrar</button></a> -->
    <!-- <a href="{{ url('/postagem/create') }}"><button type="submit" class="btn btn-info botao" >Criar</button></a> -->
    <!-- <a href="{{ route('logout') }}"><button type="submit" class="btn btn-danger" >Sair</button></a> -->
    <!-- </div> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ url('images/img_avatar.png') }}" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
              User
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('/home') }}">Login</a></li>
              <li><a class="dropdown-item" href="{{ url('/register') }}">Registrar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- #NavBar Section# -->


    </header>
    <!-- Main Content -->
        @foreach($categorias as $categoria)
        <div class="container" style="padding: 0px">
            <div class="subforum">
                <div class="subforum-title">
                    <o>{{ $categoria->nome }}</a>
                </div>
                @foreach( $categoria->postagens as $postagem )
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h5><a href="{{ url('blog/postagem/' . $postagem->id) }}">{{ $postagem->titulo }}</a></h5>
                        <p type="text">{{ Str::limit(strip_tags($postagem->conteudo), 60) }}</p>
                    </div>
                    <div class="subforum-stats subforum-column center">
                        <span>24 Posts | 12 Topics</span>
                    </div>
                    <div class="subforum-info subforum-column">
                        Criado por: <a href="">{{ $postagem->user->name }}</a><br>
                        em {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    <!-- Footer -->
    <div class="footer footer navbar-fixed-bottom">
        <div class="chart">
            Estatística do blog &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>{{ $count_postagem }}</u> Postagens feitas por <u>{{ $count_user }}</u> Usuário.</span><br>
        <footer>
            <span>&copy; Criado por Rafael Vitorino e Matheus Crook </span>
        </footer>
    </div>


</body>

</html>
