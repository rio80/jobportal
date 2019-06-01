<div class="form-group row">
    {!! Form::label('tingkat', 'Tingkat Keahlian <span class="text-danger">*</span></label>', ['class' => 'col-md-3
    col-form-label text-left'],
    false) !!}
    <div class="col-md-4">
        {!! Form::select('level', $level, null, ['class' => 'form-control', 'placeholder' =>
        'Pilih Tingkat Keahlian', 'id' => 'level', 'placeholder' => 'Pilih Tingkat Keahlian']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('keterampilan', 'Keterampilan <span class="text-danger">*</span>', ['class' => 'col-md-3
    col-form-label text-left'], false) !!}

    <div class="col-md-8">
        {!! Form::text('keterampilan', null, ['class' => 'form-control', 'id' => 'keterampilan', 'placeholder' =>
        'Masukan Keterampilan Anda']) !!}
    </div>
</div>

<div class="card-footer" style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">

    <div class="col-md-12 text-right">
        {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-success']) !!}
        {!! link_to('/skill_view', 'Batal', ['class' => 'btn btn-danger']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <table class="table" id="skill_table">
            <tr style="background-color : rgb(255, 66, 66);color: white">
                <th>Tingkat Kemampuan</th>
                <th>Keterampilan</th>
                <th>Aksi</th>

            </tr>
            @foreach ($skill as $s)
            <tr>
                <td id="level"> {!! $s->levels->nama !!} </td>
                <td id="keterampilan"> {!! $s->keterampilan !!} </td>
                <td id="aksi">
                     {!! link_to("skill_edit", "Rubah", ['class' => 'btn-sm btn-info']) !!}
                     {!! link_to("skill_delete", "Hapus", ['class' => 'btn-sm btn-danger']) !!}

                    </td>

            </tr>
            @endforeach
        </table>
    </div>

</div>
