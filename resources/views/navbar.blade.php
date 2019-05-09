@section('navbar')

<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="-1">
    <div class="container">
        <div class="navbar-translate">
            <span class="logo-container"><img class="brand" src="{{ URL::asset('img/job-icon.png') }}" alt=""></span>
            <a class="navbar-brand" href="index.html" rel="tooltip" title="Job Seekers" data-placement="bottom">
                <h3>Job Seekers</h3>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation"
            data-nav-image="{{ URL::asset('img/blurred-image-1.jpg') }}">

            <ul class="navbar-nav">

                @guest
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link btn btn-success dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                            href="{{ route('dashboard', ['iduser' => Auth::user()->id]) }}">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>


                </li>

                @endguest


            </ul>
        </div>
    </div>
</nav>
@endsection
