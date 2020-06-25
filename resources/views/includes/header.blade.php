<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="https://www.linkedin.com/in/tiago-pereira1997/" target="_blank">
                <strong class="blue-text">TDP</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-twitter"></i>Carregando...
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="#" class="nav-link border border-light rounded waves-effect">
                            <i class="mr-2">
                                <img src="{{auth()->user()->avatar}}" class="img-fluid rounded mx-auto d-block"/>
                            </i>{{auth()->user()->first_name}}
                        </a>
                    </li>
                    @endauth
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <section class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">
            <img src="{{ asset('img/glaussfleet.png')  }}" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="{{route('home')}}" class="list-group-item active waves-effect">
                <i class="fas fa-chart-pie mr-3"></i>Listagem
            </a>
            <a href="{{route('usuarios')}}" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-table mr-3"></i>Usuarios</a>
        </div>

    </section>
    <!-- Sidebar -->

</header>
