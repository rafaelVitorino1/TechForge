<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechForge Forum</title>
    <!-- Bootstrap 5.3 -->
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


    <!-- Main Content -->
    @yield('content')



<!-- Footer Section -->
    <footer class=" text-white text-center text-lg-start mt-4" style="background-color: #1f1e1e;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="trademark" style="align-items: center;20">© 2024 TECHFORGE FORUM</h5>
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
