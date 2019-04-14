@extends('template')
@section('page')

<body class="index-page sidebar-collapse">
    @extends('navbar')

    <div class="wrapper">
            @include('sweet::alert')

        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image:url({{ 'img/__header.jpg' }});">
            </div>
            <div class="container">
                <div class="brand">
                    <h4 class="h1-seo">JobSeekers Company<br><small>Media sempurna untuk pencari kerja</small></h4>
                </div>

                <div class="category category-absolute">
                    <div class="card">
                        <div class="card-body" data-background-color="black">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="pane1" role="tabpanel">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-5">
                                                <div class="form-group">
                                                    <div class="input-group no-border">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-map"></i>
                                                            </span>
                                                        </div>
                                                        <select class="form-control" id="inputGroupSelect01">
                                                            <option selected>Lokasi...</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-lg-5">
                                                <div class="form-group">
                                                    <div class="input-group no-border">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-award"></i>
                                                            </span>
                                                        </div>
                                                        <select class="form-control" id="inputGroupSelect02">
                                                            <option selected>Posisi...</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-lg-1">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search"></i> Cari
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="section section-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto col-xl-12 mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#pencarian" role="tab">Pencarian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#rekomendasi" role="tab">Rekomendasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#lamaran" role="tab">Lamaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tawaran" role="tab">Tawaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#resume" role="tab">Resume</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#bookmark" role="tab">Bookmark</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="pencarian" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="rekomendasi" role="tabpanel">
                                        <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                    </div>
                                    <div class="tab-pane" id="lamaran" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="tawaran" role="tabpanel">
                                        <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                    </div>
                                    <div class="tab-pane" id="resume" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="bookmark" role="tabpanel">
                                        <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
