@extends('pelamar.menu_pelamar')
@section('content')
<?php


    $message = '';
?>
<script>
    $().ready(function(){
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#id_jenis_perusahaan, #id_jenis_pekerjaan, #id_level_pekerjaan, ' +
            '#bulan_awal, #bulan_akhir, #tahun_awal, #tahun_akhir').select2();
    })
</script>
<style>
    .pesan-error {
        color: #a80000;
        font-weight: 500;
        font-size: 10pt;
        position: relative;
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
                    <h5><span class="fas fa-briefcase"></span> Pengalaman <span class="badge badge-danger">EDIT</span>
                    </h5>
                </div>

            </div>
            <div class="card-body">
                {!! Form::model($pengalaman, [
                'action' => ['PelamarController@updatePengalaman', $pengalaman->id],
                'method' => 'PATCH',
                ]) !!}
                @csrf

                @include('pelamar.pengalaman_long', ['submitButtonText' => 'Update Pengalaman'])
                {!! Form::close() !!}

            </div>

        </div>
    </div>
</div>
<script>
    $().ready(function(){
        $('input[name=sekarang]').attr('checked', false);

        $('#sekarang').on('click', function(){
            let kondisi = false;
            if($('#sekarang').is(":checked")){
                kondisi = true;
            }
            $('#bulan_akhir, #tahun_akhir').prop('disabled', kondisi);

        })
    })
</script>
@endsection