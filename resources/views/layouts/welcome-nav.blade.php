<nav class="navbar  fixed-top navbar-light navbar-expand-lg " role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{asset('img/Wisherr.png')}}" alt="Website Logo"> </a>
        <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbarcollapsemain" aria-controls="navbarcollapsemain" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="sr-only">Navigation Toggler</span>
            <span class="navbar-toggler-icon "> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapsemain">

            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav ml-auto">
                @if (Route::current()->getName() == 'login'||Route::current()->getName() == 'register')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    @guest
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                @endif
            </ul>
        </div>
    </div>
</nav>
