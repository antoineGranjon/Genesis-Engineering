<!--Nav-->
<header class="sticky-top">
    <div class="container">
        <div class="row justify-content-end">
            <ul class="nav subnav">
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('user.account')}}"><i class="fa fa-user"></i> Mon compte</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('login')}}"><i class="fa fa-sign-in"></i> Connexion</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('cart.index')}}"><i class="fa fa-shopping-bag"></i> Mon panier</a>
                </li>

                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Déconnexion</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Rechercher</a>
                </li>
            </ul>
        </div>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand w-lg-75" href="{{route('home.index')}}"> <img src="{{asset('/assets/images/logo_final.png')}}" alt="" class="img-fluid"> </a>

            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbar"
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
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Gammes </a>
                        <div class="dropdown-menu ml-5 ml-lg-0" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('product.index', 'name')}}">Ordinateurs</a>
                            <a class="dropdown-item" href="{{route('product.index', 'name')}}">Périphériques</a>
                            <a class="dropdown-item" href="{{route('product.index', 'name')}}">Fauteuils</a>
                            <a class="dropdown-item" href="{{route('product.index', 'name')}}">Accessoires</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('contact.index')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header><!--Nav-->