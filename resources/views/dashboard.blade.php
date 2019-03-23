@extends('template')
@section('page')
    <body class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="index.html" rel="tooltip" title="Job Seekers" data-placement="bottom">
                        <h3>Job Seekers</h3>
                    </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar top-bar"></span>
                        <span class="navbar-toggler-bar middle-bar"></span>
                        <span class="navbar-toggler-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-success" href="register.html">
                                <i class='fas fa-user-plus'></i>
                                <p>Daftar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-info" href="login.html">
                                <i class='far fa-user'></i>
                                <p>Masuk</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/bg5.jpg');">
                </div>
                <div class="container">
                    <div class="photo-container">
                        <img src="./assets/img/ryan.jpg" alt="">
                    </div>
                    <h3 class="title">Ryan Scheinder</h3>
                    <p class="category">Pencari Kerja</p>
                    <div class="content">
                        <div class="social-description">
                            <h2>26</h2>
                            <p>Lamaran</p>
                        </div>
                        <div class="social-description">
                            <h2>21</h2>
                            <p>Rekomendasi</p>
                        </div>
                        <div class="social-description">
                            <h2>48</h2>
                            <p>Tawaran</p>
                        </div>
                    </div>
                </div>
            </div>

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

            @endsection
