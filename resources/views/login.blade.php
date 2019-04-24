@extends('template')
@section('page')

<body class="login-page sidebar-collapse">
    @extends('navbar')
    <div class="not-landing page-header clear-filter" filter-color="white">
        <div class="page-header-image" style="background-image:url({{ 'img/white-solid.jpg' }}); z-index: 0;"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-header text-center">
                                <h5 class="card-title title-up">Masuk</h5>
                                @if (\Session::has('warning'))
                                {!! \Session::get('warning') !!}
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email..."
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password..."
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>
                                </div>
                                @if ($errors->has('email') || $errors->has('password'))
                                <strong>
                                    <h6>{{ 'Nama Email atau Password Tidak Sesuai' }}</h6>
                                </strong>
                                @endif
                                <div class="col-sm-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 0px;">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-8 justify-content-end">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="small float-right text-right" data-container="body"
                                                data-original-title="Lupa Password" data-toggle="popover"
                                                data-trigger="hover" data-html="true" data-placement="right"
                                                data-content="Anda dapat meminta kami untuk me-reset ulang password jika lupa password anda.">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif

                                            <br><a href="{{ route('resend-email') }}" class="small float-right text-right"
                                                data-container="body" data-original-title="Kirim Ulang"
                                                data-toggle="popover" data-trigger="hover" data-html="true"
                                                data-placement="right"
                                                data-content="Anda dapat meminta kami untuk mengirimkan ulang email aktivasi jika anda tidak menerima email aktivasi akun.">Kirim
                                                ulang email aktivasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer col text-center">
                                <span class="link">Anda belum memiliki akun?</span><br>
                                <a href="{{ url('register') }}" class="btn btn-success"><i class="fas fa-user-plus"></i>
                                    Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endsection
