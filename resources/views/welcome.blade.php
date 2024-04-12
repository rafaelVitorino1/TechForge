<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="turbopc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="fundo">
    <header>
        <!--NavBar Section------------------------------------>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="brand" href="#">TurboPC*</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
              </ul>

              <div>
                    <div class="navbox">
                    <a href="{{ url('/home') }}"><button type="submit" class="btn btn-success" >Login</button></a>
                    <a href="{{ url('/register') }}"><button type="submit" class="btn btn-warning" >Registrar</button></a>
                    <a href="{{ url('/postagem/create') }}"><button type="submit" class="btn btn-info botao" >Criar</button></a>
                    <a href="{{ route('logout') }}"><button type="submit" class="btn btn-danger" >Sair</button></a>
                    </div>
                <!-------Conteudo da navbar------------>
                </div>
            </div>
          </nav>
    </header>
        <!--NavBar Section------------------------------------>



            @foreach($categorias as $value)
                    <div class="container" style="margin-left: 0px">
                        <div class="subforum">
                            <div class="subforum-title">
                                <h1 style="color: rgb(0, 106, 148)">{{ $value->nome }}</h1>
                            </div>
                                @foreach( $value->postagens as $value )
                                <div class="subforum-row">
                                    <div class="subforum-icon subforum-column center">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                    </div>
                                    <div class="subforum-description subforum-column">

                                        <h4><a href="{{ url('/postagem/' . $value->id) }}"> {{ $value->titulo }}</a></h4>

                                        <p>{{ Str::limit($value->conteudo, 60) }}</p>
                                    </div>
                                    <div class="subforum-stats subforum-column center">
                                        <span>24 Posts | 12 Topics</span>
                                    </div>
                                    <div class="subforum-info subforum-column">
                                        Criado por: <a href="">{{ $value->user->name }}</a>
                                        <br>em {{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y h:i:s') }}
                                    </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
            @endforeach


    <!-- Forum Info -->

    <div class="footer">
        <div class="chart">
            Estatística do blog &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>{{ $count_postagem }}</u> Postagens feitas por <u>{{ $count_user }}</u> Usuário.</span><br>
        <!-- Fazer um contador de postagens e usuarios-->

    <footer>
        <span>&copy;  Criado por Rafael Vitorino e Matheus Crook </span>
    </footer>
  </div>

</body>

</html>
