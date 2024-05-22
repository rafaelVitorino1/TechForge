<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="{{ url('turbopc.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="fundo">

    <header>

        <div class="containner center">
                <img src="logo.png">
                <!-- <div class="glowing-circle"></div> -->
        </div>


<!-- NavBar Section -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Forum TechForge</a>
      </div>

      <div class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
        <li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </div>
    </div>
  </nav>

  <!-- Botoes-->
  <!-- <div> -->
  <!-- <a href="{{ url('/home') }}"><button type="submit" class="btn btn-success" >Login</button></a> -->
  <!-- <a href="{{ url('/register') }}"><button type="submit" class="btn btn-warning" >Registrar</button></a> -->
  <!-- <a href="{{ url('/postagem/create') }}"><button type="submit" class="btn btn-info botao" >Criar</button></a> -->
  <!-- <a href="{{ route('logout') }}"><button type="submit" class="btn btn-danger" >Sair</button></a> -->
  <!-- </div> -->


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
                        <h5><a href="{{ url('/postagem/' . $postagem->id) }}">{{ $postagem->titulo }}</a></h5>
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
    <div class="footer">
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
