@extends('pelamar.menu_pelamar')
@section('content')
<style>
        .redColor{
            color: #ff6868
        }
        .text-institusi{
            font-size: 20px;
        }
    </style>
<div class="container">
    <div class="row">
        <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span
                class="fas fa-bars"></span></button>
        <div class="table-responsive">
            <table class="table-resume">
                <tbody>
                    <tr>
                        <td style="vertical-align: top;">
                            <table>
                                <tr>
                                    <td>
                                            
                                        <div class="card">
                                            
                                            <div class="card-header">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5><span class="fas fa-graduation-cap"></span>
                                                                Pendidikan</h5>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <a class="btn btn-sm btn-info"
                                                                href="{{ route('pendidikan_new') }}"><span
                                                                    class="fas fa-plus-circle"></span> Tambah</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <div class="card-body">
                                        @foreach ($dataEdu as $data )

                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                {!! $data->tahun_lulus !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-12 align-text-top">
                                                                    <div class="row">
                                                                        <span class="text-institusi"><b>{!! $data->nama_institusi !!}</b></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12"
                                                                    style="border-bottom: 1px solid #bbbbbb">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="text-uppercase font-weight-bold">{!! $data->tingkatPendidikan->nama . " " .$data->bidang_studi !!}</span>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-4">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="fas fa-map-marker-alt"></span>&nbsp;&nbsp;consectetur
                                                                            </div>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: 1rem;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="row redColor">
                                                                                        Jurusan
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="row">
                                                                                        {!! $data->jurusan !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row" style="margin-top: 1.5rem;">
                                                                        {!! link_to('pendidikan/'.$data->id.'/edit','Edit', ['class' => 'btn btn-sm btn-info fas fa-pencil-alt']) !!}
                                                                       
                                                                        {!! link_to('hapusPendidikan/1', 'Hapus', ['class' => 'btn btn-sm btn-danger fas fa-trash-alt']) !!}
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

                                                @endforeach


                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection