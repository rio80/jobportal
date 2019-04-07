@extends('template')
@section('page')

<body class="profile-page sidebar-collapse">
    @extends('navbar')

<div class="not-landing page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ URL::asset('img/white-solid.jpg') }}); z-index: 0;"></div>
    <div class="content">
        <div class="wrapper">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card card-plain">
                    <div class="card-header text-center">
                        <h5 class="card-title title-up">Lowongan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-light">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="col p-3 d-flex flex-column position-static text-left">
                                                        <h3 class="mb-0">Accounting staf</h3>
                                                        <strong class="d-inline-block mb-2 text-primary">PT. Abcdef</strong>
                                                        <div class="small">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><a class="text-success"><i class="fa fa-map-marker"></i> Batam (Kepulauan Riau), Jakarta Selatan (DKI Jakarta)</a></li>
                                                                <li class="list-inline-item"><a class="text-success"><i class="fa fa-key"></i> Login untuk melihat gaji</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="card-logo" class="col p-3 d-flex flex-column position-static">
                                                        <div class="logo-container">
                                                            <img src="./assets/img/no-image.png" class="brand-logo" alt=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col p-3 d-flex flex-column position-static text-left">
                                                        <p class="mb-auto small">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col p-3 d-flex flex-column position-static text-left">
                                                        <ul class="list-inline small">
                                                            <li class="list-inline-item"><a class="text-info">5 menit lalu</a></li>
                                                            <li class="list-inline-item"><a href="#" class="text-danger large-only">Perlihatkan lebih banyak</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-light">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="col p-3 d-flex flex-column position-static text-left">
                                                        <h3 class="mb-0">Accounting staf</h3>
                                                        <strong class="d-inline-block mb-2 text-primary">PT. Abcdef</strong>
                                                        <div class="small">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><a class="text-success"><i class="fa fa-map-marker"></i> Batam (Kepulauan Riau), Jakarta Selatan (DKI Jakarta)</a></li>
                                                                <li class="list-inline-item"><a class="text-success"><i class="fa fa-key"></i> Login untuk melihat gaji</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="card-logo" class="col p-3 d-flex flex-column position-static">
                                                        <div class="logo-container">
                                                            <img src="./assets/img/no-image.png" class="brand-logo" alt=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col p-3 d-flex flex-column position-static text-left">
                                                        <p class="mb-auto small">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col p-3 d-flex flex-column position-static text-left">
                                                        <ul class="list-inline small">
                                                            <li class="list-inline-item"><a class="text-info">5 menit lalu</a></li>
                                                            <li class="list-inline-item"><a href="#" class="text-danger large-only">Perlihatkan lebih banyak</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer col text-center">
                        <span class="link">Anda belum memiliki akun?</span><br>
                        <a href="register.html" class="btn btn-success"><i class="fas fa-user-plus"></i> Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
