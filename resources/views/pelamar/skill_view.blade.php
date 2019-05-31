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
                                                            <h5>
                                                                <span class="fas fa-briefcase"></span>
                                                                Keterampilan
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <a class="btn btn-sm btn-info"
                                                                href="{{ route('skill_create') }}">
                                                                <span class="fas fa-plus-circle"></span>
                                                                Tambah
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <span>
                                                                            Menengah
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <h5>Programmer VB, java, designer, animator, network troubleshoot (IPCOP, Microtik), maintenance hardware, Mobile Programming (Android), PHP And MySQL, JAVASCRIPT, Laravel, VB.NET, C#.NET, AJAX, HTML 5, CSS3, BootStrap
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                {!! link_to('pengalaman/1/edit', 'Edit',
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
