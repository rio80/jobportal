@extends('template')
@section('page')

<body class="login-page sidebar-collapse">
    @extends('navbar')
    <div class="not-landing page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{ asset('img/white-solid.jpg') }}); z-index: 0;">
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span class="fas fa-bars"></span></button>
                    <div class="card">
                        <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                            <div class="col-md-12">
                                <h5><span class="fas fa-briefcase"></span> Pengalaman <span class="badge badge-danger">EDIT</span></h5>
                            </div>
                            <div class="col-md-12">
                                <strong>Tingkat pengalaman:</strong> Bekerja sejak 2010
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="input1" class="col-md-3 col-form-label text-left">Posisi <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="input1" placeholder="Posisi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input1a" class="col-md-3 col-form-label text-left">Nama perusahaan <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="input1a" placeholder="Nama perusahaan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input2" class="col-md-3 col-form-label text-left">Lama bekerja <span class="text-danger">*</span></label>
                                    <div class="col-md-3">
                                        <select id="input2" class="form-control">
                                            <option selected>Oktober</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="input3" class="form-control">
                                            <option selected>2019</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input2a" class="col-md-3 col-form-label text-left">Sampai <span class="text-danger">*</span></label>
                                    <div class="col-md-3">
                                        <select id="input2a" class="form-control">
                                            <option selected>Oktober</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="input3a" class="form-control">
                                            <option selected>2019</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check text-left">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox"> Sekarang
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input4" class="col-md-3 col-form-label text-left">Spesialisasi <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select id="input4" class="form-control">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 text-left">
                                        <a href="#" class="text-info"><span class="fas fa-question-circle"></span></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input5" class="col-md-3 col-form-label text-left">Bidang pekerjaan <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select id="input5" class="form-control">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input6" class="col-md-3 col-form-label text-left">Negara</label>
                                    <div class="col-md-9">
                                        <select id="input6" class="form-control">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input7" class="col-md-3 col-form-label text-left">Industri <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select id="input7" class="form-control">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input7a" class="col-md-3 col-form-label text-left">Jabatan <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select id="input7a" class="form-control">
                                            <option selected>Choose</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input8" class="col-md-3 col-form-label text-left">Gaji bulanan</label>
                                    <div class="col-md-3">
                                        <select id="input8" class="form-control">
                                            <option selected>Mata uang</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="input8a" placeholder="...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="input11" class="col-md-3 col-form-label text-left">Keterangan kerja</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="input11" rows="9"></textarea>
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
                </div>
            </div>
        </div>
    </div>
    @endsection
