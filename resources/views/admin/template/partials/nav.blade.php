<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('frontend') }}">JhonatanDev</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (Auth::guest())

                <ul class="nav navbar-nav nav navbar-nav col-md-5">
                    <li><a href="{{ route('frontend') }}">Inicio</a></li>
                    <li><a href="{{ route('articles') }}">Artículos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('inicio') }}">Inicio <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
                    <li><a href="{{ route('admin.categories.index') }}">Categorías</a></li>
                    <li><a href="{{ route('admin.articles.index') }}">Artículos</a></li>
                    <li><a href="{{ route('images') }}">Imágenes</a></li>
                    <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('frontend') }}" target="_blank">Página Principal</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
