{{-- @extends('template')
@section('page') --}}

<body class="login-page sidebar-collapse">
    {{-- @extends('navbar') --}}
    <div class="not-landing page-header clear-filter" filter-color="white">
        <div class="page-header-image" style="background-image:url({{ 'img/white-solid.jpg' }}); z-index: 0;"></div>
        <div class="content">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="table-outspace">
                            <div class="table-responsive">
                                <table class="table-cv">
                                    <thead>
                                        <tr>
                                            <th class="cv-n-1">&nbsp;</th>
                                            <th class="cv-n-2">&nbsp;</th>
                                            <th class="cv-n-3">&nbsp;</th>
                                            <th class="cv-n-4">&nbsp;</th>
                                            <th class="cv-n-5">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" colspan="4">
                                                <h2>CURRICULUM <span class="text-info">VITAE</span></h2>
                                            </td>
                                            <td class="foto-cv" rowspan="6"><img src="{!! URL::asset('fotoupload/e819f85f-4f24-4764-b44e-178e4c1ae26d_20190509152813.jpg') !!}" alt="" width="150" height="200"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>Gilang Dirgahayu</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Tempat, Tgl Lahir</td>
                                            <td>:</td>
                                            <td>Bandung, 12 Juli 1988</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Jenis Kelamin</td>
                                            <td>:</td>
                                            <td>Laki-Laki</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Kewarganegaraan</td>
                                            <td>:</td>
                                            <td>Indonesia</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td>Belum Kawin</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Alamat Sekarang</td>
                                            <td>:</td>
                                            <td colspan="2">Komplek Jayagiri Jl. Kemiri 2 RT 02/05, Pasir Kaliki, Kota
                                                Bandung 40215</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Telephone</td>
                                            <td>:</td>
                                            <td colspan="2">08123456789</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td colspan="2">gilangdrga@helpshared.com</td>
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
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>1993 - 1998</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>SDN Negeri 4</strong>, Karang mekar Cinambo Bandung
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>1993 - 1998</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>SDN Negeri 4</strong>, Karang mekar Cinambo Bandung
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>1993 - 1998</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>SDN Negeri 4</strong>, Karang mekar Cinambo Bandung
                                            </td>
                                        </tr>
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
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>2007 - 2008</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>Kursus bahasa inggris LIA</strong>, Karang mekar
                                                Cinambo
                                                Bandung</td>
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
                                                            <h5><span class="text-info">KEMAMPUAN</span></h5>
                                                        </td>
                                                        <td>
                                                            <hr>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td colspan="4">Microsoft Office Word</td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td colspan="4">Microsoft Office Word</td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td colspan="4">Microsoft Office Word</td>
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
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>2008 - 2010</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>PT. INDOJAYA UTAMA</strong>, sebagai Resepsionis
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>2008 - 2010</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>PT. INDOJAYA UTAMA</strong>, sebagai Resepsionis
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-circle"></i></td>
                                            <td>2008 - 2010</td>
                                            <td>&nbsp;</td>
                                            <td colspan="2"><strong>PT. INDOJAYA UTAMA</strong>, sebagai Resepsionis
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
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
            </div>
        </div>
    </div>
    {{-- @endsection --}}
