@extends('template')
@section('page')


    <body class="login-page sidebar-collapse">
        @extends('navbar')
        <div class="not-landing page-header clear-filter" filter-color="orange">
            <div class="page-header-image" style="background-image:url(./assets/img/white-solid.jpg); z-index: 0;"></div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                                <div class="col-md-12">
                                    <h5><span class="fas fa-briefcase"></span> Pengalaman <span class="badge badge-danger">EDIT</span></h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label for="input1" class="col-md-3 col-form-label text-left">Tingkat pengalaman <span class="text-danger">*</span></label>
                                        <div class="col-md-9 text-left">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio" checked>Saya telah bekerja sejak
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio">Saya seorang lulusan baru
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio">Saya seorang mahasiswa magang
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer" style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <button type="button" class="btn btn-danger">Batal</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
