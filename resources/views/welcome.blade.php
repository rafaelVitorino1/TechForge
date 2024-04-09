<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="turbo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="fundo">
    <header>
        <!--NavBar Section-->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#">TurboPC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <a href="{{ url('/home') }}"><button type="submit" class="btn btn-success" >Login</button></a>
            <a href="{{ url('/register') }}"><button type="submit" class="btn btn-danger" >Registrar</button></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        <!--SearchBox Section-->

    </header>

    <a href="{{ url('/postagem/create') }}"><button type="submit" class="btn btn-info" >Criar</button></a>

    @foreach($postagens as $value)

    <div class="container">

        <div class="subforum">
            <div class="subforum-title">
                <h1>{{ $value->titulo }}</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">{{ $value->titulo }}</a></h4>
                    <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 12 Topics</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a>
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

            @endforeach
        </div>
        <!--More-->



        </div>
        <!---->
    </div>

    <!-- Forum Info -->
    <div class="forum-info">
        <div class="chart">
            MyForum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>5,369</u> Posts in <u>48</u> Topics by <u>8,124</u> Members.</span><br>
        <span>Latest post: <b><a href="">Random post</a></b> on Dec 15 2021 By <a href="">RandomUser</a></span>.<br>
        <span>Check <a href="">the latest posts</a> .</span><br>
    </div>

    <footer>
        <span>&copy;  Selmi Abderrahim | All Rights Reserved</span>
    </footer>


</body>

</html>
