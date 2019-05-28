@extends('pelamar.menu_pelamar')
@section('content')
<style>
    .redColor{
        color: #ff6868
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
                                                        <div class="col-md-6" style="margin-top: 0.75rem;">
                                                            <h5><span class="fas fa-briefcase"></span> Pengalaman</h5>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <a class="btn btn-sm btn-info"
                                                                href="{{ route('pengalaman_create') }}"><span
                                                                    class="fas fa-plus-circle"></span> Tambah</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach ($dataExp as $data )
                                            <div class="card-body">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <span>
                                                                            {!! $data->tanggal_gabung !!}
                                                                            -
                                                                            {!! $data->tanggal_berhenti !!}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                            <span class="redColor">
                                                    {{-- diff_date berasal dari attribute buatan di Model Pengalaman, bukan dari kolom tabel --}}
                                                                            {!! $data->diff_date !!} </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8"> 
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <h5>{!! $data->posisi !!}
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12"
                                                                    style="border-bottom: 1px solid #bbbbbb">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="text-uppercase font-weight-bold">{!!
                                                                                    $data->nama_perusahaan !!}</span>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-2">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="fas fa-map-marker-alt"></span>&nbsp;&nbsp;consectetur
                                                                            </div>
                                                                        </div> --}}
                                                                        {{-- <div class="col-md-3">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="fas fa-comment-dots"></span>&nbsp;&nbsp;Ulas
                                                                                perusahaan
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
                                                                                        Industri 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="row">
                                                                                        {!! $data->industri->jenis_perusahaan !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="row redColor">
                                                                                        Bidang Pekerjaan
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="row">
                                                                                        {!! $data->bidang->jenis_pekerjaan !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="row redColor">
                                                                                       Jabatan
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="row">
                                                                                        {!! $data->jabatan->level_pekerjaan !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: 1rem;">
                                                                    <div class="row">
                                                                        <span>{!! $data->tugas_tanggungjawab !!}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row" style="margin-top: 1.5rem;">
                                                                {!! link_to('pengalaman/'.$data->id.'/edit', 'Edit',
                                                                ['class' =>
                                                                'btn btn-sm btn-info fas fa-pencil-alt"']) !!}

                                                                {!! link_to('pengalaman/{id}/hapus', 'Hapus', ['class'
                                                                => 'btn btn-sm btn-danger fas fa-trash-alt"']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                            </div>
                                            @endforeach

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