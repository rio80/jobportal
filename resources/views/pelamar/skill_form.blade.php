
<div class="form-group row">
    {!! Form::label('tingkat', 'Tingkat Keahlian <span
        class="text-danger">*</span></label>', ['class' => 'col-md-3 col-form-label text-left'],
    false) !!}
    <div class="col-md-4">
        {!! Form::select('tingkat', ['Pilih Tingkat Keahlian'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Tingkat Keahlian', 'id' => 'tingkat']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('keterampilan', 'Keterampilan <span class="text-danger">*</span>', ['class' => 'col-md-3 col-form-label text-left'], false) !!}

    <div class="col-md-8">
        {!! Form::text('keterampilan', null, ['class' => 'form-control', 'id' => 'keterampilan', 'placeholder' => 'Masukan Keterampilan Anda']) !!}
    </div>
</div>

<div class="card-footer"
    style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
    <div class="col-md-12">

        {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-success']) !!}
        {!! link_to('/skill_view', 'Batal', ['class' => 'btn btn-danger']) !!}
    </div>
</div>
