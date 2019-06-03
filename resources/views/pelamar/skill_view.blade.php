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
                                                @foreach ($hasil as $g)
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <span>
                                                                                {!! $g->level !!}
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">

                                                                        <h5>{!! $g->keterampilan !!}
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                                {!! link_to('/skill_view_edit/'.$g->id, 'Edit',
                                                                ['class' =>
                                                                'btn btn-sm btn-warning fas fa-pencil-alt"']) !!}
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach
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
