<div class="form-group row">
    {!! Form::label('posisi', 'Posisi <span class="text-danger">*</span></label>',
    ['class' => 'col-md-3 control-label text-left'], false) !!}
    <div class="col-md-9">
        {!! Form::text('posisi', null,['class' => 'form-control
        '.($errors->first('posisi') ? 'is-invalid' : 'is-valid'), 'placeholder' => 'Posisi', 'id' => 'posisi']) !!}
        @if($errors->first('posisi'))
        <span class="help-block pesan-error">{{ $errors->first('posisi') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('nama_perusahaan', 'Nama perusahaan <span class="text-danger">*</span></label>',
    ['class' => 'col-md-3 control-label text-left'], false) !!}
    <div class="col-md-9">
        {!! Form::text('nama_perusahaan', null,['class' => 'form-control
        '.($errors->first('nama_perusahaan') ? 'is-invalid' : 'is-valid'), 'placeholder' => 'Nama Perusahaan', 'id' => 'nama_perusahaan']) !!}
        @if($errors->first('nama_perusahaan'))
        <span class="help-block pesan-error">{{ $errors->first('nama_perusahaan') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('id_jenis_perusahaan', 'Industri <span class="text-danger">*</span>', ['class' =>
    'col-md-3 col-form-label text-left'], false) !!}
    <div class="col-md-6">
        {!! Form::select('id_jenis_perusahaan', $industri, null, ['class' =>
        'form-control '.($errors->first('id_jenis_perusahaan') ? 'is-invalid' : 'is-valid'), 'id' =>
        'id_jenis_perusahaan', 'placeholder' => 'Pilih Industri/Jenis Perusahaan', 'style' =>
        'text-align:left']) !!}
        @if($errors->first('id_jenis_perusahaan'))
        <span class="help-block pesan-error">{{ $errors->first('id_jenis_perusahaan') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('id_jenis_pekerjaan', 'Bidang pekerjaan <span class="text-danger">*</span>',
    ['class' => 'col-md-3 col-form-label text-left'], false) !!}
    <div class="col-md-6">
        {!! Form::select('id_jenis_pekerjaan', $bidang, null,
        ['class' => 'form-control '.($errors->first('id_jenis_pekerjaan') ? 'is-invalid' : 'is-valid') ,
        'id' => 'id_jenis_pekerjaan', 'placeholder' => 'Pilih Jenis Pekerjaan']) !!}
        @if($errors->first('id_jenis_pekerjaan'))
        <span class="help-block pesan-error">{{ $errors->first('id_jenis_pekerjaan') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('id_level_pekerjaan', 'Jabatan <span class="text-danger">*</span>', ['class' => 'col-md-3
    col-form-label text-left'], false) !!}
    <div class="col-md-6">
        {!! Form::select('id_level_pekerjaan', $jabatan, null, ['class' => 'form-control
        '.($errors->first('id_level_pekerjaan') ? 'is-invalid' : 'is-valid'), 'id' =>
        'id_level_pekerjaan', 'placeholder' => 'Pilih Jabatan']) !!}
        @if($errors->first('id_level_pekerjaan'))
        <span class="help-block pesan-error">{{ $errors->first('id_level_pekerjaan') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('bulan_awal', 'Periode <span class="text-danger">*</span>', ['class' => 'col-md-3
    col-form-label text-left'], false) !!}
    <div class="col-md-3">
        {!! Form::select('bulan_awal', $bulan, isset($data->getMonthJoin) ? $data->getMonthJoin : null, ['class' =>
        'form-control ' .($errors->first('bulan_awal') ? 'is-invalid' : 'is-valid'), 'placeholder' =>
        'Pilih Bulan Awal Kerja', 'id' => 'bulan_awal']) !!}
        @if($errors->first('bulan_awal'))
        <span class="help-block pesan-error">{{ $errors->first('bulan_awal') }}</span>
        @endif
    </div>
    <div class="col-md-3">
        {!! Form::select('tahun_awal', $tahuns,  isset($data->getYearJoin) ? $data->getYearJoin : null, ['class' =>
        'form-control ' .($errors->first('tahun_awal') ? 'is-invalid' : 'is-valid'), 'placeholder' =>
        'Pilih Tahun Awal Kerja', 'id' => 'tahun_awal']) !!}
        @if($errors->first('tahun_awal'))
        <span class="help-block pesan-error">{{ $errors->first('tahun_awal') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('bulan_akhir', 'Sampai <span class="text-danger">*</span>', ['class' => 'col-md-3
    col-form-label text-left'], false) !!}
    <div class="col-md-3">
        {!! Form::select('bulan_akhir', $bulan, isset($data->getMonthEnd) ? $data->getMonthEnd : null, ['class' =>
        'form-control '.($errors->first('bulan_akhir') ? 'is-invalid' : 'is-valid'), 'placeholder' =>
        'Pilih Bulan Akhir Kerja','id' => 'bulan_akhir']) !!}
        @if($errors->first('bulan_akhir'))
        <span class="help-block pesan-error">{{ $errors->first('bulan_akhir') }}</span>
        @endif
    </div>
    <div class="col-md-3">
        {!! Form::select('tahun_akhir', $tahuns, isset($data->getYearEnd) ? $data->getYearEnd : null, ['class' =>
        'form-control ' .($errors->first('tahun_akhir') ? 'is-invalid' : 'is-valid'), 'placeholder' =>
        'Pilih Tahun Akhir Kerja', 'id' => 'tahun_akhir']) !!}
        @if($errors->first('tahun_akhir'))
        <span class="help-block pesan-error">{{ $errors->first('tahun_akhir') }}</span>
        @endif
    </div>
    <div class="col-md-3">
        <div class="form-check text-left">

            <label class="form-check-label">
                {!! Form::checkbox('sekarang', 'Sekarang', true,
                ['class' => 'form-check-input', 'id' => 'sekarang']) !!}
                {{ 'Sekarang' }}
            </label>
        </div>
    </div>
</div>

<div class="form-group row">
    {!! Form::label('tugas_tanggungjawab', 'Tugas dan Tanggung Jawab
    di perusahaan ini', ['class' => 'col-md-3 col-form-label text-left']) !!}
    <div class="col-md-9">
        {!! Form::textarea('tugas_tanggungjawab', null, ['class' => 'form-control
        '.($errors->first('tugas_tanggungjawab') ? 'is-invalid' : 'is-valid')]) !!}
        @if($errors->first('tugas_tanggungjawab'))
        <span class="help-block pesan-error">{{ $errors->first('tugas_tanggungjawab') }}</span>
        @endif
    </div>
</div>
<div class="card-footer"
    style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
    <div class="col-md-12">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}

        {!! link_to('/pengalaman_view', 'Batal', ['class' => 'btn btn-danger']) !!}
    </div>
</div>
               