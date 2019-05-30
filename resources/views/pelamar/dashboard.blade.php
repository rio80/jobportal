@extends('template')
@section('page')

<body class="profile-page sidebar-collapse">

    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image:url({{'img/bg5.jpg'}});">
            </div>
            <div class="container">
                <div class="photo-container">
                    <img src="{{ 'img/ryan.jpg' }}" alt="">
                </div>
                <h3 class="title">Ryan Scheinder</h3>
                <p class="category">Pencari Kerja</p>
                {{-- <div class="content">
                    <div class="row">
                            <div class="col-xs-2 col-sm-4 col-md-4">
                                    <div class="social-description">
                                        <h2>26</h2>
                                        <p>Lamaran tes coba dsdwwwdv dsd</p>
                                    </div>
                                </div>

                                <div class="col-xs-2 col-sm-4 col-md-4">
                                    <div class="social-description">
                                        <h2>21</h2>
                                        <p>Rekomendasi</p>
                                    </div>
                                </div>

                                <div class="col-xs-2 col-sm-4 col-md-4">
                                    <div class="social-description">
                                        <h2>48</h2>
                                        <p>Tawaran</p>
                                    </div>
                                </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="section section-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto col-xl-12 mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                                    data-background-color="orange">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#pencarian"
                                            role="tab"><span class="badge">5 </span>Pencarian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#rekomendasi"
                                            role="tab">Rekomendasi</a>
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
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="rekomendasi" role="tabpanel">
                                        <p>I will be the leader of a company that ends up being worth billions of
                                            dollars, because I got the answers. I understand culture. I am the nucleus.
                                            I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. I think that’s a
                                            responsibility that I have, to push possibilities, to show people, this is
                                            the level that things could be at.</p>
                                    </div>
                                    <div class="tab-pane" id="lamaran" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="tawaran" role="tabpanel">
                                        <p>I will be the leader of a company that ends up being worth billions of
                                            dollars, because I got the answers. I understand culture. I am the nucleus.
                                            I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at.</p>
                                    </div>
                                    <div class="tab-pane" id="resume" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="bookmark" role="tabpanel">
                                        <p>I will be the leader of a company that ends up being worth billions of
                                            dollars, because I got the answers. I understand culture. I am the nucleus.
                                            I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. I think that’s a
                                            responsibility that I have, to push possibilities, to show people, this is
                                            the level that things could be at.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
