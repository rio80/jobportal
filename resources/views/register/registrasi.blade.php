@extends('template')
@section('page')


    <body class="login-page sidebar-collapse">
        @extends('navbar')

        <div class="not-landing page-header clear-filter" filter-color="white">
            <div class="page-header-image" style="background-image:url({{ asset('img/white-solid.jpg') }}); z-index: 0;"></div>
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
                                        <a href="{{ route('pekerja') }}" class="btn btn-neutral btn-round"><i class="fas fa-user-plus"></i> Daftar</a>
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
                                        <a href="{{ route('perusahaan') }}" class="btn btn-neutral btn-round"><i class="fas fa-user-plus"></i> Daftar</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            @endsection
