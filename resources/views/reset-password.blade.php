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
                                    <input type="password" name="password_lama" class="form-control" placeholder="Password Reset (ada di email anda)">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password_baru" class="form-control" placeholder="Password baru">
                                </div>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="password_baru_repeat" class="form-control" placeholder="Ulangi Password Baru">
                                    </div>

                                <div class="text-center">
                                   <button type="submit" class="btn btn-success" id="btn_submit_reg"><i
                                    class="fas fa-user-plus"></i>Ganti Password</button>
                                </div>
                            </div>

                        </form>
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>

        @endsection
