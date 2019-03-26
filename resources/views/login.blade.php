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
                        <form class="form">
                            <div class="card-header text-center">
                                <h5 class="card-title title-up">Masuk</h5>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password...">
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <a href="javascript:void(0);" class="btn btn-info"><i class="far fa-user"></i> Masuk</a>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 justify-content-end">
                                            <a href="javascript:void(0);" class="small float-right text-right" data-container="body" data-original-title="Lupa Password" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="right" data-content="Anda dapat meminta kami untuk me-reset ulang password jika lupa password anda.">Lupa password</a>
                                            <br><a href="javascript:void(0);" class="small float-right text-right" data-container="body" data-original-title="Kirim Ulang" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="right" data-content="Anda dapat meminta kami untuk mengirimkan ulang email aktivasi jika anda tidak menerima email aktivasi akun.">Kirim ulang email aktivasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer col text-center">
                                <span class="link">Anda belum memiliki akun?</span><br>
                                <a href="{{ url('register') }}" class="btn btn-success"><i class="fas fa-user-plus"></i> Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endsection
