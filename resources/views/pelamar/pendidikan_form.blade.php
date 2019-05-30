
                <div class="form-group row">
                    {!! Form::label('nama_institusi', 'Nama Sekolah/Universitas <span
                        class="text-danger">*</span></label>', ['class' => 'col-md-3 col-form-label text-left'],
                    false) !!}
                    <div class="col-md-9">
                        {!! Form::text('nama_institusi', null, ['class' => 'form-control', 'id' => 'nama_institusi',
                        'placeholder' => 'Nama Sekolah / Universitas']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('tahun_lulus', 'Tahun Lulus <span class="text-danger">*</span>', ['class' =>
                    'col-md-3 col-form-label text-left'], false) !!}

                    <div class="col-md-3">
                        {!! Form::select('tahun_lulus', $tahuns, null, ['class' => 'form-control', 'placeholder' =>
                        'Tahun Lulus', 'id' => 'tahun_lulus']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('id_tingkat', 'Tingkat Pendidikan <span class="text-danger">*</span>', ['class'
                    => 'col-md-3 col-form-label text-left'], false) !!}
                    <div class="col-md-3">
                        {!! Form::select('id_tingkat', $tingkat, null, ['class' => 'form-control', 'placeholder' => 'Tingkat Pendidikan']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('bidang_studi', 'Bidang Studi <span class="text-danger">*</span>', ['class' =>
                    'col-md-3 col-form-label text-left'], false) !!}
                    <div class="col-md-9">
                        {!! Form::text('bidang_studi', null, ['class' => 'form-control', 'id' => 'bidang_studi',
                        'placeholder' => 'Masukan Bidang Studi']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('jurusan', 'Jurusan <span class="text-danger">*</span>', ['class' => 'col-md-3
                    col-form-label text-left'], false) !!}

                    <div class="col-md-9">
                        {!! Form::text('jurusan', null, ['class' => 'form-control', 'id' => 'jurusan',
                        'placeholder' => 'Masukan Jurusan']) !!}
                    </div>
                </div>


            </div>
            <div class="card-footer"
                style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                <div class="col-md-12">

                    {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-success']) !!}
                    {!! link_to('/pendidikan_view', 'Batal', ['class' => 'btn btn-danger']) !!}
                </div>
            </div>
           