@extends('pelamar.menu_pelamar')
@section('content')
<?php
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
?>
<script>
    $(function () {
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#tanggal, #bulan, #tahun, ' +
            '#propinsi_ktp, #kota_ktp, #kecamatan_ktp, #kelurahan_ktp, ' +
            '#propinsi_dom, #kota_dom, #kecamatan_dom, #kelurahan_dom').select2();
    })

</script>
<div class="container">
    <div class="row">
        <button class="btn btn-info" id="menu-toggle" style="margin-top: -1rem;"><span
                class="fas fa-bars"></span></button>
        <div class="card">
            <div class="card-header" style="text-align: left; border-bottom: 1px solid #bbbbbb">
                <div class="col-md-12">
                    <h4><span class="fas fa-user"></span> Profil Saya <span class="badge badge-danger">EDIT</span></h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('insert-pelamar') }}" method="post" id="insertPelamar" name="insertPelamar">
                    @csrf
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="namalengkap">Nama Lengkap<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="namalengkap"
                                        placeholder="Isi nama lengkap anda">
                                </div>
                                <div class="col-md-6">
                                    <label for="uploadfoto">Upload Foto Profil</label>
                                    <input type="file" class="form-control" id="uploadfoto" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="tgllahir">Tanggal lahir <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="tanggal" class="form-control input-lg">
                                                        <option selected value="">Tanggal</option>
                                                        @foreach (range(0, 31) as $tgl)
                                                        <option value={{ $tgl }}>
                                                            {{ $tgl }}
                                                        </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    {{-- <label for="bulan">&nbsp;</label> --}}
                                                    <select id="bulan" class="form-control">
                                                        <option selected value="">Bulan</option>
                                                        @foreach ($bulan as $key => $item)
                                                        <option value={{ $key }}>
                                                            {{ $item }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    {{-- <label for="input2">&nbsp;</label> --}}
                                                    <select id="tahun" class="form-control">
                                                        <option selected value="">Tahun</option>
                                                        @foreach (range(1970, date('Y')-15) as $thn)
                                                        <option value={{ $thn }}>
                                                            {{ $thn }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="jekel">Jenis kelamin</label>
                                    <select id="jekel" class="form-control">
                                        <option selected>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="nohp_wa">Nomor ponsel <span class="text-danger">*</span> <a
                                                    href="#"><span
                                                        class="fas fa-question-circle text-info"></a></span></label>
                                            <select id="kode_hp_indo_wa" class="form-control">
                                                <option selected>+62 (Indonesia)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 0.5rem;">
                                            <input type="text" class="form-control" id="nohp_wa" placeholder="Nomor">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="nohp">Nomor telepon lain</label>
                                            <select id="kode_hp_indo" class="form-control">
                                                <option selected>+62 (Indonesia)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 0.5rem;">
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="nohp"
                                                        placeholder="Nomor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="alamatktp1">Alamat sesuai KTP</label>
                                    <input type="text" class="form-control" id="alamatktp1" placeholder="Alamat KTP 1">
                                </div>
                                <div class="col-md-6">
                                    <label for="alamatktp2">&nbsp;</label>
                                    <input type="text" class="form-control" id="alamatktp2" placeholder="Alamat KTP 2">
                                </div>
                                <div class="col-md-6">
                                        <label for="kodepos">Kode pos sesuai KTP</label>
                                        <input type="text" class="form-control" id="kodepos" placeholder="Kode pos">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="alamatdomisili1">Alamat sesuai Domisili</label>
                                    <input type="text" class="form-control" id="alamatdomisili1"
                                        placeholder="Alamat Domisili 1">
                                </div>
                                <div class="col-md-6">
                                    <label for="alamatdomisili2">&nbsp;</label>
                                    <input type="text" class="form-control" id="alamatdomisili2"
                                        placeholder="Alamat Domisili 2">
                                </div>
                                <div class="col-md-6">
                                        <label for="kodepos">Kode pos sesuai Domisili</label>
                                        <input type="text" class="form-control" id="kodepos" placeholder="Kode pos">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email1">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email1" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email2">Ulangi Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email2" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">

                            <fieldset class="border p-2">
                                <legend><u>Alamat sesuai KTP</u></legend>
                                <div class="form-group text-left">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="propinsi_ktp">Propinsi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select id="propinsi_ktp" class="form-control input-lg dynamic"
                                                    data-dependent="kota_ktp">
                                                    <option selected>Pilih provinsi</option>
                                                    @foreach($provList as $prov)
                                                    <option value="{{ $prov->id_prov }}">{{ $prov->nama_prov }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="kota_ktp">Kota/Kabupaten
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select id="kota_ktp" class="form-control input-lg dynamic"
                                                    data-dependent="kecamatan_ktp">
                                                    <option selected>Pilih Kota/Kabupaten</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="kecamatan_ktp">Kecamatan<span
                                                        class="text-danger">*</span></label>
                                                <select id="kecamatan_ktp" class="form-control input-lg dynamic"
                                                    data-dependent="kelurahan_ktp">
                                                    <option selected>pilih kecamatan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="kelurahan_ktp">Kelurahan <span
                                                        class="text-danger">*</span></label>
                                                <select id="kelurahan_ktp" class="form-control input-lg dynamic">
                                                    <option selected>Pilih kelurahan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <br>

                        <div class="col-md-6">
                            <fieldset class="border p-2">
                                <legend><u>Alamat sesuai Domisili</u></legend>
                                <div class="form-group text-left">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="propinsi_dom">Propinsi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select id="propinsi_dom" class="form-control input-lg dynamic"
                                                    data-dependent="kota_dom">
                                                    <option selected>Pilih provinsi</option>
                                                    @foreach($provList as $prov)
                                                    <option value="{{ $prov->id_prov }}">{{ $prov->nama_prov }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="kota_dom">Kota/Kabupaten
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select id="kota_dom" class="form-control input-lg dynamic"
                                                    data-dependent="kecamatan_dom">
                                                    <option selected>Pilih Kota/Kabupaten</option>
                                                </select>
                                            </div>


                                            <div class="col-md-12">
                                                <label for="kecamatan_dom">Kecamatan<span
                                                        class="text-danger">*</span></label>
                                                <select id="kecamatan_dom" class="form-control input-lg dynamic"
                                                    data-dependent="kelurahan_dom">
                                                    <option selected>pilih kecamatan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="kelurahan_dom">Kelurahan <span
                                                        class="text-danger">*</span></label>
                                                <select id="kelurahan_dom" class="form-control input-lg dynamic">
                                                    <option selected>Pilih kelurahan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div><br>
                    
                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="jenis_identitas">Identitas</label>
                                    <select id="jenis_identitas" class="form-control">
                                        <option selected value="-">Pilih Jenis Identitas</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_identitas">Nomor identitas</label>
                                    <input type="text" class="form-control" id="no_identitas" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="statusmenikah">Status Menikah<span class="text-danger">*</span></label>
                                    <select name="statusnikah" id="statusnikah" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="statusbekerja">Status Bekerja</label>
                                    <select name="statusbekerja" id="statusbekerja" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-left">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="deskripsi">Deskripsi diri</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="0" class="form-control"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer"
                style="text-align: right; border-top: 1px solid #bbbbbb; background-color: #eeeeee">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('document').ready(function () {
        $('.dynamic').change(function () {
            if ($(this).val() != '') {
                var select = $(this).attr('id');
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('fetch_lokasi') }}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        dependent: dependent,
                        _token: _token
                    },
                    success: function (result) {
                        $('#' + dependent).html(result);
                        $('#' + dependent).removeAttr('disabled');
                    },
                    beforeSend: function () {
                        $("#" + dependent).attr('disabled', 'disabled');
                        $("#" + dependent).html('<option value="">Waiting...</option>');

                    }
                });
            }
        })
    })

</script>
@endsection
