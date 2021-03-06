@extends('template')
@section('page')

<body>

    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <div class="col-md-12">
                    <div class="col-md-12">
                        @if(Session::has('idfoto'))
                        <img src="{{ asset('fotoupload/'.Session::get('idfoto')) }}" class="rounded-circle">
                        @else
                        <img src="" class="rounded-circle">
                        @endif
                    </div>
                    <div class="col-md-12 text-center text-capitalize">
                        {!! Session::get('nama') !!}
                    </div>
                </div>
            </div>
            <div class="list-group list-group-flush">

                {{ link_to('profil/'.Auth::user()->id.'/edit','Profil',['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'profil' ? 'active' : ''), 'id' => 'profil'])}}

                {{ link_to('pendidikan_view', 'Pendidikan', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'edu_view' ? 'active' : ''), 'id' => 'edu_view']) }}

                {{ link_to('pengalaman_view', 'Pengalaman', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'exp_view' ? 'active' : ''), 'id' => 'exp_view']) }}

                {{ link_to('skill_view', 'keterampilan', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'skill_view' ? 'active' : ''), 'id' => 'skill_view']) }}


                {{ link_to('#', 'Peminatan', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'minat' ? 'active' : ''), 'id' => 'minat_view']) }}

                {{ link_to('', 'Info Lain', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'inflain_view' ? 'active' : ''), 'id' => 'inflain_view']) }}



                {{ link_to('#', 'Resume Di unggah', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'res_unggah' ? 'active' : ''), 'id' => 'res_unggah']) }}

                {{ link_to('#', 'Pengaturan
                Privasi', ['class' => 'list-group-item list-group-item-action '.(isset($halaman) && $halaman == 'res_unggah' ? 'active' : ''), 'id' => 'privacy']) }}

            </div>
        </div>

        <div id="page-content-wrapper" class="login-page sidebar-collapse">
            @extends('navbar')
            <div class="not-landing page-header clear-filter" filter-color="white">
                <div class="page-header-image"
                    style="background-image:url({{ asset('img/white-solid.jpg') }}); z-index: 0;">
                </div>

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
