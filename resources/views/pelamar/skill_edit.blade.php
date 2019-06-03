@extends('pelamar.menu_pelamar')
@section('content')
<?php


?>

<script>
    $().ready(function(){
            $.fn.select2.defaults.set("theme", "bootstrap");
            $('#tahun_lulus').select2();
        })
</script>
<div class="container">
    <div class="row">
            <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span
                class="fas fa-bars"></span></button>
        <div class="card">
            <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                <div class="col-md-12">
                    <h4>Keterampilan <span class="badge badge-danger">EDIT</span></h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open([
                'id' => 'skill_view_edit',
                'method' => 'POST',
                'url' => 'skill_update',
                ]) !!}
                @csrf
                @include('pelamar.skill_form', ['SubmitButtonText' => 'Perbarui Keahlian'])
                {!! Form::close() !!}
            </div>

        </div>
    </div>

    <script>
        $().ready(function(){
            $('#skill_insert').submit(function(e){
                e.preventDefault();
                $.ajax({
                    'type' : 'POST',
                    'url' : 'skill_edit',
                    'dataType' : 'json',
                    'data' : $(this).serialize(),
                    'success' : function(data){
                        $d = data.data;
                        window.location.reload();
                    }
                })
            })
        })

    </script>
    @endsection
