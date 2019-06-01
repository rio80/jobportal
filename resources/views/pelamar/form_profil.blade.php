@extends('pelamar.menu_pelamar')
@section('content')
<?php
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$tanggals = [];
for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
    $tanggals[$tanggal] = $tanggal;
}

$tahuns = [];
for ($tahun = 1970; $tahun <= date('Y') - 15; $tahun++) {
    $tahuns[$tahun] = $tahun;
}

?>
<script>
    $(document).ready(function($){
        // $('select[name="propinsi_ktp"]').first().val('22');
        $("#input_tanggal").inputmask("99/99/9999",{ "placeholder": "dd/mm/yyyy" });

        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#tanggal, #bulan, #tahun, ' +
            '#propinsi_ktp, #kota_ktp, #kecamatan_ktp, #kelurahan_ktp, ' +
            '#propinsi_dom, #kota_dom, #kecamatan_dom, #kelurahan_dom').select2();
    })

</script>
<style>
    .pesan-error {
        color: #a80000;
        font-weight: 500;
    }

    .posisi-error {
        text-align: right;
    }
</style>
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
                {{-- <form action="{{ route('insert-profil') }}" method="post" id="insertPelamar" name="insertPelamar"
                enctype="multipart/form-data"> --}}
                {{-- {!! Form::open(['url' => 'insert-profil', 'files' => true, 'method' => 'POST']) !!} --}}
                {!! Form::model($pelamar, [
                'method' => 'PATCH',
                'files' => true,
                'action' => [
                'PelamarController@insertProfil', $pelamar->id
                ]]) !!}
                @csrf
                <div class="form-group text-left">
                    {!! Form::hidden('iduser', Auth::user()->id) !!}
                    {!! Form::hidden('noreg', $pelamar->no_reg) !!}
                    <div class="col-lg-12 col-md-12"><strong>
                            Isian yang bertanda<span class="text-danger"> * </span> Wajib diisi</strong></div>
                    <hr><br>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('namalengkap',
                                'Nama Lengkap <span class="text-danger">*</span>',
                                ['class'=> 'control-label'],
                                false) !!}
                                {!! Form::text('namalengkap', $pelamar->nama,
                                [
                                'class'=> 'form-control ' . ($errors->first('namalengkap') ? 'is-invalid' : 'is-valid'),

                                'placeholder' => 'Isi nama lengkap anda',
                                ]) !!}
                                @if($errors->first('namalengkap'))
                                <span class="help-block pesan-error">{{ $errors->first('namalengkap') }}</span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                @if($errors->first('uploadfoto'))
                                <div class="row col-lg-12">
                                    <div class="alert alert-danger">
                                        <span>{{ $errors->first('uploadfoto') }}</span>
                                    </div>
                                </div>
                                @endif
                                {!! Form::label('uploadfoto', 'Upload Foto Profil <span
                                    class="text-danger">*</span>',['class' => 'control-label'], false) !!}
                                {!! Form::file('uploadfoto',
                                ['class' => 'form-control '.($errors->first('uploadfoto') ? 'is-invalid' : 'is-valid'),
                                'id' => 'uploadfoto']) !!}
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
                                            {{-- <div class="col-md-4">
                                                <input name="input_tanggal" id="input_tanggal" class="form-control">
                                            </div> --}}
                                            <div class="col-md-12">
                                                {!! Form::label('tanggal', 'Tanggal lahir <span
                                                    class="text-danger">*</span>', ['class' => 'control-label'],
                                                false) !!}
                                            </div>



                                            <div class="col-md-4">
                                                {{ Form::select('tanggal', $tanggals, [$getDayBorn], ['class' => 'form-control', 'id' => 'tanggal']) }}
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::select('bulan', $bulan, [$getMonthBorn], ['class' =>
                                                'form-control',
                                                'id' => 'bulan']) !!}
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::select('tahun', $tahuns, [$getYearBorn], ['class'
                                                => 'form-control', 'id' => 'tahun']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {!! Form::label('jenis_kelamin', 'Jenis Kelamin <span class="text-danger">*</span>',
                                ['class' =>
                                'control-label'], false) !!}
                                {!! Form::select('jenis_kelamin',
                                [
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan'
                                ],
                                null,
                                [
                                'class' => 'form-control '.($errors->first('jenis_kelamin') ? 'is-invalid' : 'is-valid'),
                                'id' => 'jenis_kelamin',
                                'placeholder' => 'Pilih Jenis Kelamin'
                                ]) !!}
                                 <span class="help-block pesan-error">{{ $errors->first('jenis_kelamin') }}</span>
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

                                        {!! Form::label('nohp_wa', 'Nomor ponsel <span class="text-danger">*</span>
                                        <a href="#"><span class="fas fa-question-circle text-info"></a></span>',
                                        ['class' => 'control-label'], false) !!}

                                        {!! Form::select('kode_hp_indo_wa', ['+62 (Indonesia)'],'+62 (Indonesia)',
                                        ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-md-12" style="margin-top: 0.5rem;">
                                        {!! Form::text('nohp_wa', $pelamar->telp_wa, ['class' => 'form-control
                                        '.($errors->first('nohp_wa') ? 'is-invalid' : 'is-valid'),
                                        'id'
                                        =>'nohp_wa', 'placeholder' => 'Masukan No HP']) !!}
                                        <span class="help-block pesan-error">{{ $errors->first('nohp_wa') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::label('nohp', 'Nomor telepon lain', ['class' => 'control-label'])
                                        !!}

                                        {!! Form::select('kode_hp', ['+62 (Indonesia)'],'+62 (Indonesia)', ['class'
                                        => 'form-control', 'id'=> 'nohp']) !!}
                                    </div>
                                    <div class="col-md-12" style="margin-top: 0.5rem;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {!! Form::text('nohp', $pelamar->telp1,
                                                [
                                                'class' => 'form-control', 'id'
                                                =>'nohp', 'placeholder' => 'Masukan No HP lain']) !!}
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
                                {!! Form::label('alamatktp1', 'Alamat sesuai KTP <span class="text-danger">*</span>',
                                ['class' => 'control-label'], false) !!}

                                {!! Form::text('alamatktp1', $pelamar->alamat_ktp1,
                                [
                                'class' => 'form-control '.($errors->first('alamatktp1') ? 'is-invalid' : 'is-valid') ,
                                'id' =>
                                'alamatktp1', 'placeholder' => 'Alamat KTP 1']) !!}
                                <span class="help-block pesan-error">{{ $errors->first('alamatktp1') }}</span>

                                <div class="dropdown_lokasi_ktp_manual">

                                    <fieldset class="border p-2">
                                        <legend><u>Alamat sesuai KTP</u></legend>
                                        <div class="fieldset-area-ktp-manual">
                                            <div class="form-group text-left">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            {!! Form::label('propinsi_ktp', 'Propinsi
                                                            <span class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false) !!} <span
                                                                class="help-block pesan-error">{{ $errors->first('propinsi_ktp') }}</span>

                                                            {!! Form::select('propinsi_ktp', $provList, null,
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'id' =>'propinsi_ktp',
                                                            'placeholder' => 'Pilih Provinsi',
                                                            'data-dependent' => 'kota_ktp']) !!}

                                                        </div>
                                                        <div class="col-md-12">

                                                            {!! Form::label('kota_ktp', 'Kota/Kabupaten
                                                            <span class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false) !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('kota_ktp') }}</span>
                                                            {!! Form::select('kota_ktp', ['Pilih Kota/Kabupaten'], null,
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'data-dependent' => 'kecamatan_ktp',
                                                            'id' =>'kota_ktp']) !!}
                                                        </div>

                                                        <div class="col-md-12">

                                                            {!! Form::label('kecamatan_ktp', 'Kecamatan<span
                                                                class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false)
                                                            !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('kecamatan_ktp') }}</span>
                                                            {!! Form::select('kecamatan_ktp', ['pilih kecamatan'],
                                                            'pilih
                                                            kecamatan',
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'data-dependent' => 'kelurahan_ktp',
                                                            'id' =>'kecamatan_ktp']) !!}
                                                        </div>
                                                        <div class="col-md-12">

                                                            {!! Form::label('kelurahan_ktp', 'Kelurahan <span
                                                                class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false)
                                                            !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('kelurahan_ktp') }}</span>
                                                            {!! Form::select('kelurahan_ktp', ['Pilih kelurahan'],
                                                            'Pilih
                                                            kelurahan',
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'id' =>'kelurahan_ktp']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="text-right"><a class="btn btn-danger edit-ktp-cancel">Batal Edit</a>
                                    </div>

                                </div>

                                <div class="dropdown_lokasi_ktp_otomatis">
                                    <fieldset class="border p-2">
                                        <legend><u>Alamat sesuai KTP</u></legend>
                                        <div class="form-group text-left">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {!! Form::label('propinsi_ktp', 'Propinsi
                                                        <span class="text-danger">*</span>', ['class' =>
                                                        'control-label'],
                                                        false) !!} <span
                                                            class="help-block pesan-error">{{ $errors->first('propinsi_ktp') }}</span><br>

                                                        {!! Form::text('show_prov', (isset($propinsi->nama_prov) ?
                                                        $propinsi->nama_prov : 'Kosong'), ['class' =>
                                                        'form-control', 'readonly' => 'true']) !!}

                                                    </div>
                                                    <div class="col-md-12">

                                                        {!! Form::label('kota_ktp', 'Kota/Kabupaten
                                                        <span class="text-danger">*</span>', ['class' =>
                                                        'control-label'],
                                                        false) !!}
                                                        <span
                                                            class="help-block pesan-error">{{ $errors->first('kota_ktp') }}</span>
                                                        {!! Form::text('show_kota', (isset($kota->nama_kota) ?
                                                        $kota->nama_kota
                                                        : "Kosong"), ['class' =>
                                                        'form-control', 'readonly' => 'true']) !!}
                                                    </div>

                                                    <div class="col-md-12">

                                                        {!! Form::label('kecamatan_ktp', 'Kecamatan<span
                                                            class="text-danger">*</span>', ['class' => 'control-label'],
                                                        false)
                                                        !!}
                                                        <span
                                                            class="help-block pesan-error">{{ $errors->first('kecamatan_ktp') }}</span>
                                                        {!! Form::text('show_kec', (isset($kec->nama_kec) ?
                                                        $kec->nama_kec :
                                                        "kosong"), ['class' => 'form-control',
                                                        'readonly' => 'true']) !!}
                                                    </div>
                                                    <div class="col-md-12">

                                                        {!! Form::label('kelurahan_ktp', 'Kelurahan <span
                                                            class="text-danger">*</span>', ['class' => 'control-label'],
                                                        false)
                                                        !!}
                                                        <span
                                                            class="help-block pesan-error">{{ $errors->first('kelurahan_ktp') }}</span>
                                                        {!! Form::text('show_kel', (isset($kel->nama_kel)
                                                        ?$kel->nama_kel :
                                                        "kosong"), ['class' => 'form-control',
                                                        'readonly' => 'true']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="text-right"><a class="btn btn-info edit-ktp">Edit Lokasi</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                {!! Form::label('alamatdomisili1', 'Alamat sesuai Domisili <span
                                    class="text-danger">*</span>', ['class' =>
                                'control-label'], false) !!}

                                {!! Form::text('alamatdomisili1', $pelamar->alamat_domisili1,
                                ['class' => 'form-control '.($errors->first('alamatdomisili1') ? 'is-invalid' :
                                'is-valid'), 'id' =>
                                'alamatdomisili1', 'placeholder' => 'Alamat Domisili 1']) !!}
                                <span class="help-block pesan-error">{{ $errors->first('alamatdomisili1') }}</span>

                                <div class="dropdown_lokasi_dom_manual">
                                    <fieldset class="border p-2">
                                        <legend><u>Alamat sesuai Domisili</u></legend>
                                        <div class="fieldset-area-dom-manual">
                                            <div class="form-group text-left">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            {!! Form::label('propinsi_dom', 'Propinsi
                                                            <span class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false) !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('propinsi_dom') }}</span>
                                                            {!! Form::select('propinsi_dom', $provList, 'Pilih
                                                            provinsi',
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'id' =>'propinsi_dom',
                                                            'placeholder' => 'Pilih Provinsi',
                                                            'data-dependent' => 'kota_dom']) !!}

                                                        </div>
                                                        <div class="col-md-12">

                                                            {!! Form::label('kota_dom', 'Kota/Kabupaten
                                                            <span class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false) !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('kota_dom') }}</span>
                                                            {!! Form::select('kota_dom', ['Pilih Kota/Kabupaten'],
                                                            'Pilih
                                                            Kota/Kabupaten',
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'data-dependent' => 'kecamatan_dom',
                                                            'id' =>'kota_dom']) !!}

                                                        </div>


                                                        <div class="col-md-12">

                                                            {!! Form::label('kecamatan_dom', 'Kecamatan<span
                                                                class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false)
                                                            !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('kecamatan_dom') }}</span>
                                                            {!! Form::select('kecamatan_dom', ['pilih kecamatan'],
                                                            'pilih
                                                            kecamatan', [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'data-dependent' => 'kelurahan_dom',
                                                            'id' =>'kecamatan_dom']) !!}
                                                        </div>
                                                        <div class="col-md-12">

                                                            {!! Form::label('kelurahan_dom', 'Kelurahan <span
                                                                class="text-danger">*</span>', ['class' =>
                                                            'control-label'],
                                                            false)
                                                            !!}
                                                            <span
                                                                class="help-block pesan-error">{{ $errors->first('kelurahan_dom') }}</span>
                                                            {!! Form::select('kelurahan_dom', ['Pilih kelurahan'],
                                                            'Pilih
                                                            kelurahan',
                                                            [
                                                            'class' => 'form-control input-lg dynamic',
                                                            'id' =>'kelurahan_dom']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox" id="equals-ktp">
                                                <label>
                                                    {!! Form::checkbox('equals_with_ktp', 'Sama dengan KTP', true, ['class'
                                                    =>
                                                    'equals_with_ktp']) !!}
                                                    {{ 'Sama dengan KTP' }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-right"><a class="btn btn-danger edit-dom-cancel">Batal Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown_lokasi_dom_otomatis">
                                    <fieldset class="border p-2">
                                        <legend><u>Alamat sesuai Domisili</u></legend>
                                        <div class="form-group text-left">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {!! Form::label('propinsi_ktp', 'Propinsi
                                                        <span class="text-danger">*</span>', ['class' =>
                                                        'control-label'],
                                                        false) !!} <span
                                                            class="help-block pesan-error">{{ $errors->first('propinsi_dom') }}</span><br>

                                                        {!! Form::text('show_prov_dom', (isset($prop_dom->nama_prov) ?
                                                        $prop_dom->nama_prov : "kosong"), ['class' =>
                                                        'form-control', 'readonly' => 'true']) !!}

                                                    </div>
                                                    <div class="col-md-12">

                                                        {!! Form::label('kota_ktp', 'Kota/Kabupaten
                                                        <span class="text-danger">*</span>', ['class' =>
                                                        'control-label'],
                                                        false) !!}
                                                        <span
                                                            class="help-block pesan-error">{{ $errors->first('kota_dom') }}</span>
                                                        {!! Form::text('show_kota_dom', (isset($kota_dom->nama_kota) ?
                                                        $kota_dom->nama_kota : "kosong"), ['class' =>
                                                        'form-control', 'readonly' => 'true']) !!}
                                                    </div>

                                                    <div class="col-md-12">

                                                        {!! Form::label('kecamatan_ktp', 'Kecamatan<span
                                                            class="text-danger">*</span>', ['class' => 'control-label'],
                                                        false)
                                                        !!}
                                                        <span
                                                            class="help-block pesan-error">{{ $errors->first('kecamatan_ktp_dom') }}</span>
                                                        {!! Form::text('show_kec_dom', (isset($kec_dom->nama_kec) ?
                                                        $kec_dom->nama_kec : "Kosong"), ['class' =>
                                                        'form-control', 'readonly' => 'true']) !!}
                                                    </div>
                                                    <div class="col-md-12">

                                                        {!! Form::label('kelurahan_ktp', 'Kelurahan <span
                                                            class="text-danger">*</span>', ['class' => 'control-label'],
                                                        false)
                                                        !!}
                                                        <span
                                                            class="help-block pesan-error">{{ $errors->first('kelurahan_ktp_dom') }}</span>
                                                        {!! Form::text('show_kel_dom', (isset($kel_dom->nama_kel) ?
                                                        $kel_dom->nama_kel : "Kosong"), ['class' =>
                                                        'form-control', 'readonly' => 'true']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-12 text-right"><a class="btn btn-info edit-dom">Edit Lokasi</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-group text-left">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::label('email1', 'Email <span class="text-danger">*</span>', ['class' =>
                                'control-label'], false) !!}

                                {!! Form::text('email1', null, [
                                'class' => 'form-control '.($errors->first('email1') ? 'is-invalid' : 'is-valid'),
                                'id' => 'email1',
                                'placeholder' => 'Masukan email']) !!}
                                <span class="help-block pesan-error">{{ $errors->first('email1') }}</span>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="form-group text-left">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('jenis_identitas', 'Identitas <span class="text-danger">*</span>',
                                ['class' => 'control-label'], false) !!}
                                {!! Form::select('jenis_identitas', $jenis_identitas, null,
                                ['class' => 'form-control '.($errors->first('jenis_identitas') ? 'is-invalid' :
                                'is-valid'),
                                'id' => 'jenis_identitas', 'placeholder' => 'Pilih Jenis Identitas'])
                                !!}
                                <span class="help-block pesan-error">{{ $errors->first('jenis_identitas') }}</span>
                            </div>
                            <div class="col-md-6">
                                {{-- {!! Form::label('no_identitas', 'Nomor identitas <span class="text-danger">*</span>',
                                ['class' => 'control-label'], false) !!}
                                {!! Form::text('no_identitas', null,
                                ['class' => 'form-control '.($errors->first('no_identitas') ? 'is-invalid' :
                                'is-valid'),
                                'placeholder' =>
                                'Masukan No Identitas Anda', 'id' => 'no_identitas']) !!}
                                <span class="help-block pesan-error">{{ $errors->first('no_identitas') }}</span> --}}
                                {!! Form::label('statusbekerja', 'Status Bekerja <span class="text-danger">*</span>',
                                ['class' => 'control-label'], false) !!}
                                {!! Form::select('statusbekerja', $stat_kerja, [$pelamar->status_bekerja],
                                ['class' => 'form-control '.($errors->first('statusbekerja') ? 'is-invalid' :
                                'is-valid'),
                                'id' => 'statusbekerja', 'placeholder' => 'Apakah Anda masih bekerja?']) !!}
                                <span class="help-block pesan-error">{{ $errors->first('statusbekerja') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('statusnikah', 'Status Menikah<span class="text-danger">*</span>',
                                ['class' => 'control-label'], false) !!}
                                {!! Form::select('statusnikah', $stat_nikah, [$pelamar->status_nikah],
                                ['class' => 'form-control '.($errors->first('statusnikah') ? 'is-invalid' : 'is-valid'),
                                'id'
                                => 'statusnikah', 'placeholder' => 'Pilih Status Nikah']) !!}
                                <span class="help-block pesan-error">{{ $errors->first('statusnikah') }}</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-group text-left">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::label('deskripsi', 'Deskripsikan diri anda : <span
                                    class="text-danger">*</span>', ['class' =>
                                'control-label'], false) !!}
                                {!! Form::textarea('deskripsi', $pelamar->deskripsi_diri,
                                [
                                'class' => 'form-control '.($errors->first('deskripsi') ? 'is-invalid' : 'is-valid'),
                                'cols' => '0',
                                'rows' => '5',
                                'id' => 'deskripsi'
                                ]) !!}
                                <span class="help-block pesan-error">{{ $errors->first('deskripsi') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer"
                    style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                    <div class="col-md-12">
                        {!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
                        {!! Form::button('Batal', ['class' => 'btn btn-danger']) !!}

                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $(function ($) {
        $('.dynamic').change(function () {
            if ($(this).val() != '') {
                var select = $(this).attr('id');
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('fetch_lokasi') }}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        dependent: dependent,
                        _token: _token
                    },
                    success: function (result) {
                        $('#' + dependent).html(result);
                        $('#' + dependent).removeAttr('disabled');
                    },
                    beforeSend: function () {
                        $("#" + dependent).attr('disabled', 'disabled');
                        $("#" + dependent).html(
                            '<option value="">Mohon Tunggu...</option>');

                    }
                });
            }
        });

        // $('.equals_with_ktp').hide();
        // $('#equals-ktp').hide();

        $('#kelurahan_ktp').on('change', function(){
            if($( "#propinsi_ktp option:selected" ).val() !== '' &&
            $( "#kota_ktp option:selected" ).val() !== '' &&
            $( "#kecamatan_ktp option:selected" ).val() !== ''&&
            $( "#kelurahan_ktp option:selected" ).val() !== ''){
                $('.equals_with_ktp').show();
                 $('#equals-ktp').show();

            }else{
                $('.equals_with_ktp').hide();
                $('#equals-ktp').hide();

            }
        })

        $('.equals_with_ktp').on('click', function(){
            let kondisi = false;
            if($('.equals_with_ktp').is(":checked")){
                kondisi = true;
            }
            $('#propinsi_dom, #kota_dom, #kecamatan_dom, #kelurahan_dom').prop('disabled', kondisi);

        })


        $('.dropdown_lokasi_ktp_otomatis').hide();
        $('.dropdown_lokasi_dom_otomatis').hide();


        let kel_ktp = '{{ $pelamar->kode_kel_ktp }}';
        let kel_dom = '{{ $pelamar->kode_kel }}';

        if(kel_ktp == kel_dom){
            $('#equals-ktp').show();
            $('.equals_with_ktp').show();
            $('input[name=equals_with_ktp]').attr('checked', true);
        }
        let dataLokasi = '{{ isset($propinsi->nama_prov) ? $propinsi->nama_prov : "0" }}';
        if (dataLokasi !== '0') {
            $('.dropdown_lokasi_ktp_otomatis').show();
            $('.dropdown_lokasi_ktp_manual').hide();
        }

        let dataLokasiDom = '{{ isset($prop_dom->nama_prov) ? $prop_dom->nama_prov : "0" }}';
        if (dataLokasiDom !== '0') {
            $('.dropdown_lokasi_dom_otomatis').show();
            $('.dropdown_lokasi_dom_manual').hide();
        }

        $('.edit-ktp').on('click', function () {
            $('.dropdown_lokasi_ktp_otomatis').hide();
            $('.dropdown_lokasi_ktp_manual').show();

        });

        $('.edit-ktp-cancel').on('click', function () {
            $('.dropdown_lokasi_ktp_otomatis').show();
            $('.dropdown_lokasi_ktp_manual').hide();
        });

        $('.edit-dom').on('click', function () {
            $('.dropdown_lokasi_dom_otomatis').hide();
            $('.dropdown_lokasi_dom_manual').show();
        });

        $('.edit-dom-cancel').on('click', function () {
            $('.dropdown_lokasi_dom_otomatis').show();
            $('.dropdown_lokasi_dom_manual').hide();
        });


        $('input[name=equals_with_ktp]').attr('checked', false);

    })

</script>
@endsection
