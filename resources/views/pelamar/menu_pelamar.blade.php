@extends('template')
@section('page')

<body>

    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <img src="{{ asset('fotoupload/'.$idfoto) }}" class="rounded-circle">
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="row">
                            Lorem ipsum dolor sit amet
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ url('pengalaman_view') }}" id="exp" class="list-group-item list-group-item-action bg-light">Pengalaman</a>
                <a href="{{ url('pendidikan_view') }}" id="edu" class="list-group-item list-group-item-action bg-light">Pendidikan</a>
                <a href='#' id="skl" class="list-group-item list-group-item-action bg-light">Keterampilan</a>
                <a href='#' id="lng" class="list-group-item list-group-item-action bg-light">Bahasa</a>
                <a href='#' id="inf_lain" class="list-group-item list-group-item-action bg-light">Info Lain</a>
                {{-- <a href="{{ url('profil') }}" id="prof" class="list-group-item list-group-item-action bg-light">Profil Saya</a> --}}
                {{ link_to('profil/'.Auth::user()->id.'/edit','Profil',['class' => 'list-group-item list-group-item-action bg-light'])}}
                <a href='#' id="res_unggah" class="list-group-item list-group-item-action bg-light">Resume Diunggah</a>
                <a href='#' href="privasi" class="list-group-item list-group-item-action bg-light">Pengaturan Privasi</a>
            </div>
        </div>

        <div id="page-content-wrapper" class="login-page sidebar-collapse">
            @extends('navbar')
            <div class="not-landing page-header clear-filter" filter-color="white">
            <div class="page-header-image" style="background-image:url({{ 'img/white-solid.jpg' }}); z-index: 0;"></div>

                <div class="content">
                    @yield('content')
                </div>
            </div>

            <script>
                    $("#menu-toggle").click(function (e) {
                        e.preventDefault();
                        $("#wrapper").toggleClass("toggled");
                    });

                </script>
            @endsection
