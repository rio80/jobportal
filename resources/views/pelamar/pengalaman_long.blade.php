@extends('pelamar.menu_pelamar')
@section('content')
<?php
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    $tahuns = [];
    for ($tahun = 1970; $tahun <= date('Y') - 15; $tahun++) {
        $tahuns[$tahun] = $tahun;
    }
?>
<script>
    $().ready(function(){
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#id_jenis_perusahaan, #id_jenis_pekerjaan, #jabatan, ' +
            '#bulan_awal, #bulan_akhir, #tahun_awal, #tahun_akhir').select2();
    })
</script>
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
                {!! Form::open([
                'url' => 'insert-pengalaman',
                'method' => 'PATCH',
                'files' => true,
                ]) !!}
                @csrf

                <div class="form-group row">
                    {!! Form::label('nama_perusahaan', 'Nama perusahaan <span class="text-danger">*</span></label>',
                    ['class' => 'col-md-3 col-form-label text-left'], false) !!}
                    <div class="col-md-9">
                        {!! Form::text('nama_perusahaan', null,['class' => 'form-control', 'placeholder' => 'Nama Perusahaan', 'id' => 'nama_perusahaan']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('id_jenis_perusahaan', 'Industri <span class="text-danger">*</span>', ['class' =>
                    'col-md-3 col-form-label text-left'], false) !!}
                    <div class="col-md-6">
                        {!! Form::select('id_jenis_perusahaan', ['Pilih Industri/Jenis Perusahaan'], null, ['class' => 'form-control', 'id' => 'id_jenis_perusahaan', 'placeholder' => 'Pilih Industri/Jenis Perusahaan', 'style' => 'text-align:left']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('id_jenis_pekerjaan', 'Bidang pekerjaan <span class="text-danger">*</span>',
                    ['class' => 'col-md-3 col-form-label text-left'], false) !!}
                    <div class="col-md-6">
                        {!! Form::select('id_jenis_pekerjaan', ['Pilih Jenis Pekerjaan'], null,
                        ['class' => 'form-control' , 'id' => 'id_jenis_pekerjaan', 'placeholder' => 'Pilih Jenis Pekerjaan']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('jabatan', 'Jabatan <span class="text-danger">*</span>', ['class' => 'col-md-3
                    col-form-label text-left'], false) !!}
                    <div class="col-md-6">
                        {!! Form::select('jabatan', ['Pilih Jabatan'], null, ['class' => 'form-control', 'id' => 'jabatan', 'placeholder' => 'Pilih Jabatan']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('bulan_awal', 'Periode <span class="text-danger">*</span>', ['class' => 'col-md-3
                    col-form-label text-left'], false) !!}
                    <div class="col-md-3">
                        {!! Form::select('bulan_awal', $bulan, null, ['class' =>
                        'form-control', 'placeholder' => 'Pilih Bulan Awal Kerja', 'id' => 'bulan_awal']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::select('tahun_awal', $tahuns, null, ['class' =>
                        'form-control', 'placeholder' => 'Pilih Tahun Awal Kerja', 'id' => 'tahun_awal']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('bulan_akhir', 'Sampai <span class="text-danger">*</span>', ['class' => 'col-md-3
                    col-form-label text-left'], false) !!}
                    <div class="col-md-3">
                        {!! Form::select('bulan_akhir', $bulan, null, ['class' =>
                        'form-control', 'placeholder' => 'Pilih Bulan Akhir Kerja','id' => 'bulan_akhir']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::select('tahun_akhir', $tahuns, null, ['class' =>
                        'form-control', 'placeholder' => 'Pilih Tahun Akhir Kerja', 'id' => 'tahun_akhir']) !!}
                    </div>
                    <div class="col-md-3">
                        <div class="form-check text-left">

                            <label class="form-check-label">
                                {!! Form::checkbox('sekarang', 'Sekarang', true,
                                ['class' => 'form-check-input']) !!}
                                {{ 'Sekarang' }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('tugas_tanggungjawab', 'Tugas dan Tanggung Jawab
                    di perusahaan ini', ['class' => 'col-md-3 col-form-label text-left']) !!}
                    <div class="col-md-9">
                        {!! Form::textarea('tugas_tanggungjawab', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="card-footer"
                style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                <div class="col-md-12">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
                    {!! Form::button('Batal', ['class' => 'btn btn-danger']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection