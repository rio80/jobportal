@section('navbar')

<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="-1">
    <div class="container">
        <div class="navbar-translate">
            <span class="logo-container"><img class="brand" src="{{ 'img/job-icon.png' }}" alt=""></span>
            <a class="navbar-brand" href="index.html" rel="tooltip" title="Job Seekers" data-placement="bottom">
                <h3>Job Seekers</h3>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ 'img/blurred-image-1.jpg' }}">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-success" href="{{ url('register') }}">
                        <i class='fas fa-user-plus'></i>
                        <p>Daftar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="{{ url('login') }}">
                        <i class='far fa-user'></i>
                        <p>Masuk</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection
