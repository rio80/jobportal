@extends('pelamar.menu_pelamar')
@section('content')
<div class="container">
    <div class="row">
        <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span
                class="fas fa-bars"></span></button>
        <div class="card">
            <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                <div class="col-md-12">
                    <h5><span class="fas fa-briefcase"></span> Pengalaman <span class="badge badge-danger">EDIT</span>
                    </h5>
                </div>

            </div>
            <div class="card-body">
                <form>
                   
                    <div class="form-group row">
                        <label for="nama_perusahaan" class="col-md-3 col-form-label text-left">Nama perusahaan <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nama_perusahaan" placeholder="Nama perusahaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_jenis_perusahaan" class="col-md-3 col-form-label text-left">Industri <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select id="id_jenis_perusahaan" class="form-control">
                                <option selected>Choose</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_jenis_pekerjaan" class="col-md-3 col-form-label text-left">Bidang pekerjaan <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select id="id_jenis_pekerjaan" class="form-control">
                                <option selected>Choose</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-md-3 col-form-label text-left">Jabatan <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select id="jabatan" class="form-control">
                                <option selected>Choose</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulan_awal" class="col-md-3 col-form-label text-left">Periode <span
                                class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <select id="bulan_awal" class="form-control">
                                <option selected>Oktober</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="tahun_awal" class="form-control">
                                <option selected>2019</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulan_akhir" class="col-md-3 col-form-label text-left">Sampai <span
                                class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <select id="bulan_akhir" class="form-control">
                                <option selected>Oktober</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="tahun_akhir" class="form-control">
                                <option selected>2019</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check text-left">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="sekarang" id="sekarang"> Sekarang
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="tugas_tanggungjawab" class="col-md-3 col-form-label text-left">Tugas dan Tanggung Jawab di perusahaan ini</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="tugas_tanggungjawab" rows="9"></textarea>
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