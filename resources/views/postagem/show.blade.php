<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="{{ url('post.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="fundo">
    <header>
        <!--NavBar Section------------------------------------>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="brand" href="#">TurboPC*</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
              </ul>
              <div class="navbox">
                    <a href="{{ url('/home') }}"><button type="submit" class="btn btn-success">Login</button></a>
                    <a href="{{ url('/register') }}"><button type="submit" class="btn btn-warning">Registrar</button></a>
                    <a href="{{ url('/postagem/create') }}"><button type="submit" class="btn btn-info">Criar</button></a>
                    <a href="{{ route('logout') }}"><button type="submit" class="btn btn-danger">Sair</button></a>
              </div>
            </div>
          </nav>
    </header>

    <!--Postagem------------------------------------>
    <div class="subforum carlos">
        <div class="row justify-content-center">
            <div class="midia" style="padding: 30px; margin: 1px;">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <h3>{{ $postagem->user->name }}</h3>
            </div>
            <div class="">
                <div class="midia carlos">
                    <div class="card-header">Postagem</div>
                    <div class="container">
                        <strong>Categoria:</strong> {{ $postagem->categoria->nome }}<br>
                        <strong>Título:</strong> {{ $postagem->titulo }}<br>
                        <strong>Autor:</strong> {{ $postagem->user->name }}<br>
                        <strong>Conteúdo:</strong>
                        <br>
                        <div class="conteudo">
                            {!! $postagem->conteudo !!}
                        </div>
                        <br>
                    </div>
                    <div>
                        <strong>Criação:</strong> {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}<br>
                        <strong>Atualização:</strong> {{ \Carbon\Carbon::parse($postagem->updated_at)->format('d/m/Y h:i:s') }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Comentarios------------------------------------>
    <div class="subforum">
        <div class="row justify-content-center">
            <div class="subforum-icon subforum-column">
                <div style="margin">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
                <h4>{{ $postagem->user->name }}</h4>
            </div>
            <div class="col-md-8" style="padding: 0px;">
                <div class="subforum-column" style="margin: 0px;">
                    <div class="card-header">Comentários</div>
                    <div class="card-body">
                        @foreach ( $postagem->comentarios as $value )
                            <p>{{ $value->conteudo }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER ----------------------------------------->
    <div class="footer">
        <div class="chart">
            Estatística do blog &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>***</u> Postagens feitas por <u>***</u> Usuário.</span><br>
        <!-- Fazer um contador de postagens e usuários -->
        <footer>
            <span>&copy; Criado por Rafael Vitorino, Matheus Crook</span>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-3sApVdEOWofq2IT4aZcNfOfYkhzPB2yEA9fAq/A5pZ8Ed40U5t8azPbeVdQVMK8K" crossorigin="anonymous"></script>
</body>
</html>
