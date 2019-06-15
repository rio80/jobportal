@if ($data['status'] == 'view')
    @extends('pelamar.menu_pelamar')
    @section('content')
@endif
<div class="container">
    <div class="col-lg-12">
        <div class="row">
                <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span
                    class="fas fa-bars"></span></button>
            {{-- <div class="table-outspace"> --}}
            <div class="table-responsive">

                <?php
                    $d = $data['profil_utama'];
                    $pd = $data['pendidikan'];
                    $pn = $data['pend_nonformal'];
                    $pl = $data['pengalaman'];
                    $sk = $data['skill'];
                ?>
                <table class="table-cv">

                    <thead>
                        <tr>
                            <th width="0%">&nbsp;</th>
                            <th width="18%">&nbsp;</th>
                            <th width="0%">&nbsp;</th>
                            <th width="55%">&nbsp;</th>
                            <th width="35%">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" colspan="4">
                                <h2>CURRICULUM <span class="text-info">VITAE</span></h2>
                            </td>

                            <td class="foto-cv" rowspan="6"><img src="{!! URL::asset('fotoupload/'.$d->pasfoto) !!}"
                                    alt="" width="160" height="200" />
                            </td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{!! $d->nama !!}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{!! $d->tanggal_lahir !!}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{!! $d->jenis_kelamin !!}</td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>Status</td>
                            <td>:</td>
                            <td>{!! $d->statusNikah->nama !!}</td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>Telephone</td>
                            <td>:</td>
                            <td>{!! $d->telp1 !!} / {!! 'wa : ' . $d->telp_wa !!}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Email</td>
                            <td>:</td>
                            <td colspan="2">
                                {!! ($d->email1 == '-') ? '' : $d->email1 !!}
                                {!! ($d->email2 == '-') ? '' : '/ '. $d->email2 !!}
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Alamat Domisili</td>
                            <td>:</td>
                            <td colspan="2">{!! $d->alamat_domisili1 !!}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <table class="subtitle-cv">
                                    <tr>

                                        <td style="width: 15%;">
                                            <hr>
                                        </td>
                                        <td style="width: 15%;">
                                            <h5><span class="text-info">PENDIDIKAN</span></h5>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>FORMAL</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        @foreach ($pd as $p)
                        <tr>
                            <td><i class="far fa-circle"></i></td>
                            <td>Kelulusan : {!! $p->tahun_lulus !!}</td>
                            <td>&nbsp;</td>
                            <td colspan="2">{!! $p->tingkatPendidikan->nama !!} - <strong>{!! $p->nama_institusi
                                    !!}</strong>, Bidang Studi {!! $p->bidang_studi !!}, Jurusan {!! $p->jurusan !!}
                            </td>
                        </tr>
                        @endforeach


                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>NON FORMAL</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        @foreach ( $pn as $d )
                        <tr>
                            <td><i class="far fa-circle"></i></td>
                            <td>
                                {!! $d->tanggal_mulai !!} - {!! $d->tanggal_selesai !!}
                            </td>
                            <td>&nbsp;</td>
                            <td colspan="2"><strong>
                                    {!! $d->bidang_keahlian !!} di {!! $d->nama_lembaga !!}
                                </strong>, {!! $d->alamat_lembaga !!}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <table class="subtitle-cv">
                                    <tr>
                                        <td style="width: 15%;">
                                            <hr>
                                        </td>
                                        <td style="width: 15%;">
                                            <h5><span class="text-info">KEMAMPUAN</span></h5>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        @foreach ($sk as $d)
                        <tr>
                            <td><i class="far fa-circle"></i></td>
                            <td><strong>{!! $d->level !!}</strong></td>
                            <td colspan="3">{!! $d->keterampilan !!}</td>
                        </tr>
                        @endforeach


                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <table class="subtitle-cv">
                                    <tr>
                                        <td style="width: 15%;">
                                            <hr>
                                        </td>
                                        <td style="width: 15%;">
                                            <h5><span class="text-info">PENGALAMAN&nbsp;KERJA</span>
                                            </h5>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        @foreach ($pl as $d)
                        <tr>
                            <td><i class="far fa-circle"></i></td>
                            <td>{!! $d->tanggal_gabung !!} - {!! $d->tanggal_berhenti !!}</td>
                            <td>&nbsp;</td>
                            <td colspan="2"><strong>{!! $d->nama_perusahaan !!}</strong>, Sebagai {!! $d->posisi !!}
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>

    </div>
</div>

@if ($data['status'] == 'view')
    @endsection
@endif
