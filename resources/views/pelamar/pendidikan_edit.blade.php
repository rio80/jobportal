@extends('pelamar.menu_pelamar')
@section('content')
<?php

    $tahuns = [];
    for ($tahun = 1970; $tahun <= date('Y') - 1; $tahun++) {
        $tahuns[$tahun] = $tahun;
    }
?>

<script>
    $().ready(function(){
            $.fn.select2.defaults.set("theme", "bootstrap");
            $('#tahun_lulus').select2();
        })
</script>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                <div class="col-md-12">
                    <h4>Pendidikan <span class="badge badge-danger">EDIT</span></h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($pendidikan, [
                'action' => ['PelamarController@pendidikanUpdate', $pendidikan->id],
                'method' => 'PATCH',
                ]) !!}
                @csrf
                @include('pelamar.pendidikan_form', ['SubmitButtonText' => 'Perbarui Pendidikan'])
                {!! Form::close() !!}
            </div>
    
        </div>
    </div>
    @endsection