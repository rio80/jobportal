@extends('pelamar.menu_pelamar')
@section('content')
<?php
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
?>
<script>
    $(function () {
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#tanggal, #bulan, #tahun, ' +
            '#propinsi_ktp, #kota_ktp, #kecamatan_ktp, #kelurahan_ktp, ' +
            '#propinsi_dom, #kota_dom, #kecamatan_dom, #kelurahan_dom').select2();
    })

</script>
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
                <form action="{{ route('insert-profil') }}" method="post" id="insertPelamar" name="insertPelamar">
                    @csrf
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    @if(!empty($errors->first()))
                                    <div class="row col-lg-12">
                                        <div class="alert alert-danger">
                                            <span>{{ $errors->first() }}</span>
                                        </div>
                                    </div>
                                    @endif
                                    {!! Form::label('namalengkap', 
                                    'Nama Lengkap <span class="text-danger">*</span>', 
                                    ['class'=> 'control-label'],
                                     false) !!}
                                     {!! Form::text('namalengkap', '',
                                     [
                                         'class'=> 'form-control', 
                                         'placeholder' => 'Isi nama lengkap anda',
                                    ]) !!}
                                    
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('uploadfoto', 'Upload Foto Profil',['class' => 'control-label']) !!}
                                    {!! Form::file('uploadfoto', 
                                    ['class' => 'form-control']) !!}
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
                                                <div class="col-md-12">
                                                    {!! Form::label('tgllahir', 'Tanggal lahir <span
                                                    class="text-danger">*</span>', ['class' => 'control-label'], false) !!}
                                                </div>
                                                <div class="col-md-4">
                                                    {{ Form::select('tanggal', range(1, 31), null, ['class' => 'form-control', 'id' => 'tanggal']) }}
                                                </div>
                                                <div class="col-md-4">
                                                    {!! Form::select('bulan', $bulan, null, ['class' => 'form-control', 'id' => 'bulan']) !!}
                                                </div>
                                                <div class="col-md-4">
                                                    {!! Form::select('tahun', range(1970, date('Y')-15), null, ['class' => 'form-control', 'id' => 'tahun']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('jekel', 'Jenis Kelamin', ['class' => 'control-label']) !!}
                                    {!! Form::select('jekel', 
                                    [
                                        'Laki-laki' => 'Laki-laki', 
                                        'Perempuan' => 'Perempuan'
                                    ], 
                                        'Laki-laki', 
                                    [
                                        'class' => 'form-control', 
                                        'id' => 'jekel'
                                    ]) !!}
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
                                                @if(!empty($errors->first()))
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span>{{ $errors->first('nohp_wa') }}</span>
                                                    </div>
                                                </div>
                                                @endif
                                            {!! Form::label('nohp_wa', 'Nomor ponsel <span class="text-danger">*</span> <a
                                            href="#"><span
                                                class="fas fa-question-circle text-info"></a></span>', ['class' => 'control-label'], false) !!}

                                            {!! Form::select('kode_hp_indo_wa', ['+62 (Indonesia)'],'+62 (Indonesia)', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-md-12" style="margin-top: 0.5rem;">
                                            {!! Form::text('nohp_wa', null, ['class' => 'form-control', 'id' =>'nohp_wa', 'placeholder' => 'Masukan No HP']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!! Form::label('nohp', 'Nomor telepon lain', ['class' => 'control-label']) !!}

                                            {!! Form::select('kode_hp', ['+62 (Indonesia)'],'+62 (Indonesia)', ['class' => 'form-control', 'id'=> 'nohp']) !!}
                                        </div>
                                        <div class="col-md-12" style="margin-top: 0.5rem;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                        {!! Form::text('nohp', null, ['class' => 'form-control', 'id' =>'nohp', 'placeholder' => 'Masukan No HP lain']) !!}
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
                                    {!! Form::label('alamatktp1', 'Alamat sesuai KTP', ['class' => 'control-label']) !!}
 
                                    {!! Form::text('alamatktp1', null, ['class' => 'form-control' , 'id' => 'alamatktp1', 'placeholder' => 'Alamat KTP 1']) !!}
                                </div>
                                <div class="col-md-6">
             
                                    {!! Form::label('alamatktp2', null, ['class' => 'control-label']) !!}
 
                                    {!! Form::text('alamatktp2', null, ['class' => 'form-control' , 'id' => 'alamatktp2', 'placeholder' => 'Alamat KTP 2']) !!}
                                </div>
                                <div class="col-md-6">

                                        {!! Form::label('kodeposktp', 'Kode pos sesuai KTP', ['class' => 'control-label']) !!}
 
                                        {!! Form::text('kodeposktp', null, ['class' => 'form-control' , 'id' => 'kodepos', 'placeholder' => 'Kode pos KTP']) !!}
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
    
                                    {!! Form::label('alamatdomisili1', 'Alamat sesuai Domisili', ['class' => 'control-label']) !!}
 
                                    {!! Form::text('alamatdomisili1', null, ['class' => 'form-control' , 'id' => 'alamatdomisili1', 'placeholder' => 'Alamat Domisili 1']) !!}
                                </div>
                                <div class="col-md-6">
             
                                    {!! Form::label('alamatdomisili2', 'Alamat sesuai Domisili', ['class' => 'control-label']) !!}
 
                                    {!! Form::text('alamatdomisili2', null, ['class' => 'form-control' , 'id' => 'alamatdomisili2', 'placeholder' => 'Alamat Domisili 2']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('kodeposdom', 'Kode pos sesuai Domisili', ['class' => 'control-label']) !!}

                                    {!! Form::text('kodeposdom', null, ['class' => 'form-control' , 'id' => 'kodeposdom', 'placeholder' => 'Kode pos sesuai Domisili']) !!}
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
    
                                    {!! Form::label('email1', 'Email <span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}
 
                                    {!! Form::text('email1', null, ['class' => 'form-control' , 'id' => 'email1', 'placeholder' => 'Masukan email']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
 
                                    {!! Form::label('email2', 'Email <span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}
 
                                    {!! Form::text('email2', null, ['class' => 'form-control' , 'id' => 'email2', 'placeholder' => 'Ulangi email']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">

                            <fieldset class="border p-2">
                                <legend><u>Alamat sesuai KTP</u></legend>
                                <div class="form-group text-left">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                               
                                                {!! Form::label('propinsi_ktp', 'Propinsi
                                                <span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('propinsi_ktp', $provList, 'Pilih provinsi',
                                                [
                                                    'class' => 'form-control input-lg dynamic', 
                                                    'id' =>'propinsi_ktp', 
                                                    'data-dependent' => 'kota_ktp']) !!}

                                            </div>
                                            <div class="col-md-12">
                                        
                                                {!! Form::label('kota_ktp', 'Kota/Kabupaten
                                                <span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('kota_ktp', ['Pilih Kota/Kabupaten'], 'Pilih Kota/Kabupaten', 
                                                [
                                                    'class' => 'form-control input-lg dynamic', 
                                                    'data-dependent' => 'kecamatan_ktp', 
                                                    'id' =>'kota_ktp']) !!}
                                            </div>

                                            <div class="col-md-12">

                                                {!! Form::label('kecamatan_ktp', 'Kecamatan<span
                                                class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('kecamatan_ktp', ['pilih kecamatan'], 'pilih kecamatan',
                                                 [
                                                     'class' => 'form-control input-lg dynamic', 
                                                     'data-dependent' => 'kelurahan_ktp', 
                                                     'id' =>'kecamatan_ktp']) !!}
                                            </div>
                                            <div class="col-md-12">
           
                                                {!! Form::label('kelurahan_ktp', 'Kelurahan <span
                                                class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('kelurahan_ktp', ['Pilih kelurahan'], 'Pilih kelurahan', 
                                                [
                                                    'class' => 'form-control input-lg dynamic',
                                                    'id' =>'kelurahan_ktp']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <br>

                        <div class="col-md-6">
                            <fieldset class="border p-2">
                                <legend><u>Alamat sesuai Domisili</u></legend>
                                <div class="form-group text-left">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
     
                                                {!! Form::label('propinsi_dom', 'Propinsi
                                                <span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('propinsi_dom', $provList, 'Pilih provinsi',
                                                [
                                                    'class' => 'form-control input-lg dynamic',
                                                    'id' =>'propinsi_dom', 
                                                    'data-dependent' => 'kota_dom']) !!}

                                            </div>
                                            <div class="col-md-12">
                                      
                                                {!! Form::label('kota_dom', 'Kota/Kabupaten
                                                <span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('kota_dom', ['Pilih Kota/Kabupaten'], 'Pilih Kota/Kabupaten',
                                                 [
                                                     'class' => 'form-control input-lg dynamic', 
                                                     'data-dependent' => 'kecamatan_dom',
                                                     'id' =>'kota_dom']) !!}
                                      
                                            </div>


                                            <div class="col-md-12">
                 
                                                {!! Form::label('kecamatan_dom', 'Kecamatan<span
                                                class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('kecamatan_dom', ['pilih kecamatan'], 'pilih kecamatan', [
                                                    'class' => 'form-control input-lg dynamic', 
                                                    'data-dependent' => 'kelurahan_dom',
                                                    'id' =>'kecamatan_dom']) !!}
                                            </div>
                                            <div class="col-md-12">
                     
                                                {!! Form::label('kelurahan_dom', 'Kelurahan <span
                                                class="text-danger">*</span>', ['class' => 'control-label'], false) !!}

                                                {!! Form::select('kelurahan_dom', ['Pilih kelurahan'], 'Pilih kelurahan', 
                                                [
                                                    'class' => 'form-control input-lg dynamic', 
                                                    'id' =>'kelurahan_dom']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div><br>
                    
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Form::label('jenis_identitas', 'Identitas', ['class' => 'control-label']) !!}
                                    {!! Form::select('jenis_identitas', $jenis_identitas, null, ['class' => 'form-control', 'id' => 'jenis_identitas']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('no_identitas', 'Nomor identitas', ['class' => 'control-label']) !!}

                                    {!! Form::text('no_identitas', null, ['class' => 'form-control', 'placeholder' => 'Masukan No Identitas Anda']) !!}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Form::label('statusmenikah', 'Status Menikah<span class="text-danger">*</span>', ['class' => 'control-label'], false) !!}
                                    {!! Form::select('statusnikah', $stat_nikah, null, ['class' => 'form-control', 'id' => 'statusnikah']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('statusbekerja', 'Status Bekerja', ['class' => 'control-label']) !!}
                                    {!! Form::select('statusbekerja', $stat_kerja, null, ['class' => 'form-control', 'id' => 'statusbekerja']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::label('deskripsi', 'Deskripsikan diri anda :', ['class' => 'control-label']) !!}

                                    {!! Form::textarea('deskripsi', null, 
                                    [
                                    'class' => 'form-control', 
                                    'cols' => '0', 
                                    'rows' => '5', 
                                    'id' => 'deskripsi'
                                    ]) !!}

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
    $('document').ready(function () {
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
                        $("#" + dependent).html('<option value="">Mohon Tunggu...</option>');

                    }
                });
            }
        })
    })

</script>
@endsection
