@extends('pelamar.menu_pelamar')
@section('content')
<div class="container">
    <div class="row">
        <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span
                class="fas fa-bars"></span></button>
        <div class="card">
            <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                <div class="col-md-12">
                    <h4><span class="fas fa-user"></span> Profil Saya <span class="badge badge-danger">EDIT</span></h4>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input1">Nama <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="input1" placeholder="...">
                                </div>
                                <div class="col-md-6">
                                    <label for="input1a">&nbsp;</label>
                                    <input type="text" class="form-control" id="input1a" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="input2">Tanggal lahir <span
                                                            class="text-danger">*</span></label>
                                                    <select id="input2" class="form-control">
                                                        <option selected>Tanggal</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="input2">&nbsp;</label>
                                                    <select id="input2" class="form-control">
                                                        <option selected>Bulan</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="input2">&nbsp;</label>
                                                    <input type="text" class="form-control" id="input2"
                                                        placeholder="Tahun">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="input2a">Jenis kelamin</label>
                                    <select id="input2a" class="form-control">
                                        <option selected>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="input3">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="input3" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="input4">Nomor ponsel <span class="text-danger">*</span> <a
                                                    href="#"><span
                                                        class="fas fa-question-circle text-info"></a></span></label>
                                            <select id="input4" class="form-control">
                                                <option selected>+62 (Indonesia)</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 0.5rem;">
                                            <input type="text" class="form-control" id="input4a" placeholder="Nomor">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="input5">Nomor telepon lain</label>
                                            <select id="input5" class="form-control">
                                                <option selected>+62 (Indonesia)</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 0.5rem;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select id="input5a" class="form-control">
                                                        <option selected>Kode area</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="input5b"
                                                        placeholder="Nomor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input6">Alamat sekarang</label>
                                    <input type="text" class="form-control" id="input6" placeholder="Alamat 1">
                                </div>
                                <div class="col-md-6">
                                    <label for="input6a">&nbsp;</label>
                                    <input type="text" class="form-control" id="input6a" placeholder="Alamat 2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input7">Kota</label>
                                    <input type="text" class="form-control" id="input7" placeholder="Kota">
                                </div>
                                <div class="col-md-6">
                                    <label for="input7a">Kode pos</label>
                                    <input type="text" class="form-control" id="input7a" placeholder="Kode pos">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input8">Negara <span class="text-danger">*</span></label>
                                    <select id="input8" class="form-control">
                                        <option selected>Indonesia</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="input8a">Propinsi <span class="text-danger">*</span></label>
                                    <select id="input8a" class="form-control">
                                        <option selected>DKI Jakarta</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input9">Warganegara <span class="text-danger">*</span></label>
                                    <select id="input9" class="form-control">
                                        <option selected>Indonesia</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="input9a">Ijin permanen lain (maksimal 5)</label>
                                    <input type="text" class="form-control" id="input9a" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input10">Identitas</label>
                                    <select id="input10" class="form-control">
                                        <option selected>KTP</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="input10a">Nomor identitas</label>
                                    <input type="text" class="form-control" id="input10a" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer"
                style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
