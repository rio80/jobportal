@extends('template')
@section('page')
    <body class="login-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
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
                            <a class="nav-link btn btn-info" href="{{ url('/') }}">
                                <i class='far fa-user'></i>
                                <p>Masuk</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" style="background-image:url({{ 'img/bg2.jpg' }})"></div>
            <div class="content">
                <div class="container">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="card card-login card-plain">
                            <form class="form">
                                <div class="card-header text-center">
                                    <div class="logo-container">
                                        <img src="{{ 'img/job-icon.png' }}" alt="">
                                    </div>
                                    <h4 class="card-title title-up">Daftar<br><small>sebagai perusahaan</small></h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email...">
                                    </div>
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password...">
                                    </div>
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Ulangi password...">
                                    </div>
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-success"><i class="fas fa-user-plus"></i> Daftar</a>
                                    </div>
                                </div>
                                <div class="card-footer col text-center">
                                    <a class="link">Anda sudah memiliki akun?</a><br>
                                    <a href="login.html" class="btn btn-info"><i class="far fa-user"></i> Masuk</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
