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
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="card card-signup" data-background-color="green">
                                    <div class="card-header text-center">
                                        <h2>Daftar<br><small>sebagai pencari kerja</small></h2>
                                        <hr>
                                    </div>
                                    <div class="card-body">
                                        <h5>Temukan pekerjaan impianmu</h5>
                                        <h6>Buat resume online Gratis untuk peroleh peluang kerja lebih baik.</h6>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url('register-pekerja') }}" class="btn btn-neutral btn-round"><i class="fas fa-user-plus"></i> Daftar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="card card-signup" data-background-color="blue">
                                    <div class="card-header text-center">
                                        <h2>Daftar<br><small>sebagai perusahaan</small></h2>
                                        <hr>
                                    </div>
                                    <div class="card-body">
                                        <h5>Temukan kandidat potensialmu</h5>
                                        <h6>Pasang iklan lowongan agar terhubung dengan pencari kerja yang paling potensial.</h6>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url('register-perusahaan') }}" class="btn btn-neutral btn-round"><i class="fas fa-user-plus"></i> Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
