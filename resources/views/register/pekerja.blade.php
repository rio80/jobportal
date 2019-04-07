@extends('template')
@section('page')

<body class="login-page sidebar-collapse">
    @extends('navbar')

    <div class="not-landing page-header clear-filter" filter-color="white">
        <div class="page-header-image" style="background-image:url({{ asset('img/white-solid.jpg') }}); z-index: 0;">
        </div>
        <div class="content">
            <div class="container">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="card card-login card-plain">

                    {!! Form::open(['route' => 'insert-pekerja', 'method' => 'POST'])  !!}
                        {{ Form::token() }}
                        {{-- <form class="form" action="{{ route('insert-pekerja') }}" method="POST">
                            {{ csrf_field() }} --}}
                            <div class="card-header text-center">
                                <h4 class="card-title title-up">Daftar<br><small>sebagai pencari kerja</small></h4>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="no_telp" class="form-control" placeholder="No Telp">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" name="email1" class="form-control" placeholder="Email...">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password...">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password-repeat" id="password-repeat" class="form-control" placeholder="Ulangi password...">
                                </div>
                                <div class="text-center">
                                   <button type="submit" class="btn btn-success" id="btn_submit_reg"><i
                                    class="fas fa-user-plus"></i>Daftar</button>
                                </div>
                            </div>
                            <div class="card-footer col text-center">
                                <span class="link">Anda sudah memiliki akun?</span><br>
                                <a href="login.html" class="btn btn-info"><i class="far fa-user"></i> Masuk</a>
                            </div>
                        </form>
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>

        @endsection
