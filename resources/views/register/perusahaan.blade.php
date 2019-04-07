@extends('template')

@section('page')

<body class="login-page sidebar-collapse">

    @extends('navbar')
    <div class="not-landing page-header clear-filter" filter-color="white">
        <div class="page-header-image"
            style="background-image:url({{ URL::asset('img/white-solid.jpg') }}); z-index: 0;"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form class="form" action="{{ route('insert-perusahaan') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="card-header text-center">
                                <h4 class="card-title title-up">Daftar<br><small>sebagai perusahaan</small></h4>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nama Anda / perusahaan" name="nama" id="nama">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="No Telp" name="no_telp" id="no_telp">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Ulangi password" name="password_repeat" id="password_repeat">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success"><i
                                        class="fas fa-user-plus"></i>Daftar</button>
                                </div>
                            </div>
                            <div class="card-footer col text-center">
                                <span class="link">Anda sudah memiliki akun?</span><br>
                                <a href="login.html" class="btn btn-info"><i class="far fa-user"></i> Masuk</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endsection
