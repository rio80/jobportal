@extends('template')
@section('page')

<body class="login-page sidebar-collapse">
    @extends('navbar')
    <div class="not-landing page-header clear-filter" filter-color="white">
        <div class="page-header-image" style="background-image:url({{ 'img/white-solid.jpg' }}); z-index: 0;"></div>
        <div class="container" style="text-align: right;">
            <div class="card-body" style="background: white;min-width:300px;width:60%;margin:0px auto">
                <form method="POST" action="{{ route('resend-email') }}" class="form-vertical" id="form">
                    @csrf
                    <div class="card-header text-center">
                        <h5 class="card-title title-up">Kirim Ulang Email</h5>
                        @if (\Session::has('warning'))
                        {!! \Session::get('warning') !!}
                        @endif
                    </div>
                    <div class="card-body" style="padding:0px;">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email..."
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required autofocus>
                        </div>


                        @if ($errors->has('email'))
                        <strong>
                            <h6>{{ 'Nama Email Tidak Sesuai' }}</h6>
                        </strong>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Resend Email') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        @endsection
