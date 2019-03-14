<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="SJ3, Multimédia, matériel,informatique, pc, photo">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title> @yield('title')</title>
</head>
<body>

<!--Nav-->
<header class="sticky-top">
    <div class="container">
        <div class="row justify-content-end">
            <ul class="nav subnav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('user.account')}}">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('cart.index')}}">Mon panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Rechercher</a>
                </li>
            </ul>

        </div>
        <div class="row">
            <nav class="navbar navbar-expand-md align-items-end">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('/assets/images/logo_final.png')}}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav justify-content-end mr-auto d-flex flex-fill">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('home.index')}}">Accueil</a></li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('home.about')}}">Qui sommes nous</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gammes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('product.index')}}">Ordinateurs</a>
                                <a class="dropdown-item" href="{{route('product.index')}}">Périphériques</a>
                                <a class="dropdown-item" href="{{route('product.index')}}">Fauteuils</a>
                                <a class="dropdown-item" href="{{route('product.index')}}">Accessoires</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('contact.index')}}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Nav-->


@yield('content')


<footer class="eg-footer">

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-3 col-sm-6 justify-content-center">
                <div class="footer-info-about">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-angle-right"></i> Accueil</a></li>
                        <li><a href="/qui-sommes-nous"><i class="fa fa-angle-right"></i> Qui sommes-nous ?</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i> Gammes</a></li>
                        <li><a href="/contact"><i class="fa fa-angle-right"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 justify-content-center">
                <div class="footer-info-about">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-angle-right"></i> CGV</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i> CGU</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 justify-content-center">
                <div class="footer-info-about">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-facebook-square"></i> Facebook</a></li>
                        <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href=""><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a href="/secret" style="color: #282828"><i class="fa fa-heart" style="color: #282828"></i>
                                Secret</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 justify-content-center">
                <div class="footer-info">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-angle-right"></i> FR</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i> UK</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-12 justify-content-center text-center">
                    <p>Copyright <i class="fa fa-copyright"></i> 2019. GENESIS engineering.</p>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </section>

</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>