    <!-- External Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('turbopc.css')}}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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

                        <div class="center">

                            <div class="subforum-column">
                                <img src="{{ url('images/img_avatar.png') }}" class="rounded-circle mb-3 center" style="width: 110px;" alt="Avatar" />
                                <h5 class="mb-2 center"><strong>{{ $postagem->user->name }}</strong></h5>
                                <p class="text-muted center"><span class="badge bg-primary">Membro</span></p>
                            </div>

                            <div class="card container" >
                                <div class="card-header">
                                {{ $postagem->titulo }}
                                </div>
                                <div class="card-body">
                                <h5 class="card-title">{{ $postagem->titulo }}</h5>
                                <p>{{ $postagem->conteudo }}</p>
                                </div>
                                <div class="card-footer text-muted">
                                <time class="published" datetime="2015-11-01">{{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}</time>
                                </div>
                            </div>
                        </div>
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $postagem->titulo }}</a></h2>
										<p></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}</time>
										<a href="#" class="author"><span class="name">{{ $postagem->user->name }}</span><img src="{{ url('images/avatar.jpg') }}" alt="" /></a>
									</div>
								</header>
								<p>{{ $postagem->conteudo }}</p>
								<footer>
									<ul class="stats">
										<li><a href="#">{{ $postagem->categoria->nome }}</a></li>
										<li><a href="#" class="icon solid fa-heart">{{ $postagem->curtidas->count() }}</a></li>
										<li><a href="{{ url('/blog/postagem/' . $postagem->id) }}" class="icon solid fa-comment">Esta postagem possui {{ $postagem->comentarios->count() }} comentário!</a></li>

                                        @auth

                                        <form action="{{ route('blog.postagemComentario', $postagem->id) }}" method="post">
                                            @csrf
                                            <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
                                            <button type="submit" class="btn btn-danger">Comentar</button>
                                        </form>

                                        @endauth

									</ul>
								</footer>

                                <h3>Comentários:</h3>

                                @foreach ($postagem->comentarios as $comentario)

                                    <p>{{ $comentario->conteudo }}</p>
                                    <p>Feito por: {{ $comentario->user->name }} - Data: {{ $comentario->created_at }}</p>

                                @endforeach

							</article>


