@extends('pelamar.menu_pelamar')
@section('content')

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
                                                                <a class="btn btn-sm btn-info" href="{{ route('pendidikan_form') }}"><span class="fas fa-plus-circle"></span> Tambah</a>
                                                            </div>
                                                    </div>
                                                </div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <h3><small>Desember 2018</small></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <h2><small>Lorem ipsum dolor sit
                                                                                amet</small></h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12"
                                                                    style="border-bottom: 1px solid #bbbbbb">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="text-uppercase font-weight-bold">dolor
                                                                                    sit amet, consectetur
                                                                                    adipisicing elit</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="row">
                                                                                <span
                                                                                    class="fas fa-map-marker-alt"></span>&nbsp;&nbsp;consectetur
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: 1rem;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="row text-success">
                                                                                        dolor sit amet
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="row">
                                                                                        consectetur
                                                                                        adipisicing elit
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="row text-success">
                                                                                        consectetur
                                                                                        adipisicing elit
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="row">
                                                                                        dolor sit amet
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
                                                                                <a href="{{ route('pendidikan_form') }}"><span
                                                                                        class="fas fa-pencil-alt"></span><button class="btn btn-sm btn-info">Edit</button></a>
                                                                                <a href="#"><span
                                                                                        class="fas fa-trash-alt"></span><button  class="btn btn-sm btn-danger">hapus</button></a>
                                                                            </div>
                                                                </div>
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
