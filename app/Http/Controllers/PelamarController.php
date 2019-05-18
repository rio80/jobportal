<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormProfilRequest;
// use Auth;
use App\Models\Kecamatan as kec;
use App\Models\Kelurahan as kel;
use App\Models\Kota as kota;
use App\Models\Pelamar;
use App\Models\Registrasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use View;

class PelamarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index($iduser = null)
    {
        $cekPelamar = DB::table('tb_mst_pelamar')
            ->join('tb_ref_registrasi', 'tb_mst_pelamar.no_reg', '=', 'tb_ref_registrasi.id')
            ->join('users', 'tb_ref_registrasi.user_id', '=', 'users.id')
            ->where('users.id', $iduser)
            ->first();
        if (($cekPelamar->nama == "-" || empty($cekPelamar->nama)) ||
            ($cekPelamar->pasfoto == "-" || empty($cekPelamar->pasfoto)) ||
            ($cekPelamar->telp1 == "-" || empty($cekPelamar->telp1)) ||
            ($cekPelamar->alamat_ktp1 == "-" || empty($cekPelamar->alamat_ktp1)) ||
            ($cekPelamar->kodepos_ktp == "-" || empty($cekPelamar->kodepos_ktp)) ||
            ($cekPelamar->alamat_domisili1 == "-" || empty($cekPelamar->alamat_domisili1)) ||
            ($cekPelamar->kodepos_domisili == "-" || empty($cekPelamar->kodepos_domisili)) ||
            ($cekPelamar->email1 == "-" || empty($cekPelamar->email1)) ||
            ($cekPelamar->kode_prov_ktp == "-" || empty($cekPelamar->kode_prov_ktp)) ||
            ($cekPelamar->kode_kota_ktp == "-" || empty($cekPelamar->kode_kota_ktp)) ||
            ($cekPelamar->kode_kec_ktp == "-" || empty($cekPelamar->kode_kec_ktp)) ||
            ($cekPelamar->kode_kel_ktp == "-" || empty($cekPelamar->kode_kel_ktp)) ||
            ($cekPelamar->kode_prov == "-" || empty($cekPelamar->kode_prov)) ||
            ($cekPelamar->kode_kota == "-" || empty($cekPelamar->kode_kota)) ||
            ($cekPelamar->kode_kec == "-" || empty($cekPelamar->kode_kec)) ||
            ($cekPelamar->kode_kel == "-" || empty($cekPelamar->kode_kel)) ||
            ($cekPelamar->jenis_identitas == "-" || empty($cekPelamar->jenis_identitas)) ||
            ($cekPelamar->no_identitas == "-" || empty($cekPelamar->no_identitas)) ||
            ($cekPelamar->status_nikah == "-" || empty($cekPelamar->status_nikah)) ||
            ($cekPelamar->status_bekerja == "-" || empty($cekPelamar->status_bekerja)) ||
            ($cekPelamar->deskripsi_diri == "-" || empty($cekPelamar->deskripsi_diri))) {
            alert()->warning('Warning Message', 'Harap Lengkapi Profil Anda');
            return redirect("/profil/$iduser/edit");
        }
        return view('pelamar.menu_pelamar');
    }

    public function print_cv()
    {
        return view('pelamar.print_cv');
    }

    public function lowongan_detail()
    {
        return view('pelamar.lowongan_detail');
    }

    public function pendidikan_form()
    {
        return view('pelamar.pendidikan_form');
    }

    public function pendidikan_view()
    {
        return view('pelamar.pendidikan_view');
    }

    public function profil(Pelamar $req, $iduser = null)
    {
        $no_reg = Registrasi::select(['id as id_reg'])->where('user_id', $iduser)->first();

        $pelamarTable = DB::table('tb_mst_pelamar')
            ->join('tb_ref_registrasi', 'tb_mst_pelamar.no_reg', '=', 'tb_ref_registrasi.id')
            ->select('tb_mst_pelamar.*')->where('tb_ref_registrasi.id', $no_reg->id_reg)->first();
        // dd($pelamarTable->id);
        $data['pelamar'] = Pelamar::findOrFail($pelamarTable->id);

        $data['propinsi'] = DB::table('tb_mst_provinsi')
            ->select('id_prov', 'nama_prov')
            ->where('id_prov', $pelamarTable->kode_prov_ktp)
            ->first();
        $data['kota'] = DB::table('tb_mst_kota')
            ->select('id_kota', 'nama_kota')
            ->where('id_kota', $pelamarTable->kode_kota_ktp)
            ->first();
        $data['kec'] = DB::table('tb_mst_kecamatan')
            ->select('id_kec', 'nama_kec')
            ->where('id_kec', $pelamarTable->kode_kec_ktp)
            ->first();
        $data['kel'] = DB::table('tb_mst_kelurahan')
            ->select('id_kel', 'nama_kel')
            ->where('id_kel', $pelamarTable->kode_kel_ktp)
            ->first();

        $data['prop_dom'] = DB::table('tb_mst_provinsi')
            ->select('id_prov', 'nama_prov')
            ->where('id_prov', $pelamarTable->kode_prov)
            ->first();
        $data['kota_dom'] = DB::table('tb_mst_kota')
            ->select('id_kota', 'nama_kota')
            ->where('id_kota', $pelamarTable->kode_kota)
            ->first();
        $data['kec_dom'] = DB::table('tb_mst_kecamatan')
            ->select('id_kec', 'nama_kec')
            ->where('id_kec', $pelamarTable->kode_kec)
            ->first();
        $data['kel_dom'] = DB::table('tb_mst_kelurahan')
            ->select('id_kel', 'nama_kel')
            ->where('id_kel', $pelamarTable->kode_kel)
            ->first();

        $data['getYearBorn'] = Carbon::createFromFormat('Y-m-d', $pelamarTable->tanggal_lahir)->year;
        $data['getMonthBorn'] = Carbon::createFromFormat('Y-m-d', $pelamarTable->tanggal_lahir)->month;
        $data['getDayBorn'] = Carbon::createFromFormat('Y-m-d', $pelamarTable->tanggal_lahir)->day;
        $getId = [];
        // $data['idfoto'] = $pelamarTable->pasfoto;
        session([
            'idfoto' => $pelamarTable->pasfoto,
            'dataPelamar' => $data['pelamar'],
            'idpelamar' => $pelamarTable->id,
        ]);
        return View::make('pelamar.form_profil', $data);
    }

    public function pengalaman_short()
    {
        return view('pelamar.pengalaman_short');
    }

    public function pengalaman_long()
    {
        return view('pelamar.pengalaman_long');
    }

    public function pengalaman_view()
    {
        return view('pelamar.pengalaman_view');
    }

    public function menu_resume()
    {
        return view('pelamar.menu_pelamar');
    }

    public function fetch_lokasi(Request $req)
    {
        $select = $req->get('select');
        $value = $req->get('value');
        $dependent = (explode("_", $req->get('dependent')))[0];

        $output = '<option value="">Pilih ' . ucfirst($dependent) . '</option>';

        if ($select == 'propinsi_ktp' || $select == 'propinsi_dom') {
            $data = kota::select('id_kota', 'jenis', 'nama_kota')->where('id_prov', $value)->get();
            foreach ($data as $row) {
                $output .= '<option value="' . $row->id_kota . '">' . $row->jenis . " " . $row->nama_kota . '</option>';
            }
        }

        if ($select == 'kota_ktp' || $select == 'kota_dom') {
            $data = kec::select('id_kec', 'nama_kec')->where('id_kota', $value)->get();
            foreach ($data as $row) {
                $output .= '<option value="' . $row->id_kec . '">' . $row->nama_kec . '</option>';
            }
        }

        if ($select == 'kecamatan_ktp' || $select == 'kecamatan_dom') {
            $data = kel::select('id_kel', 'nama_kel')->where('id_kec', $value)->get();
            foreach ($data as $row) {
                $output .= '<option value="' . $row->id_kel . '">' . $row->nama_kel . '</option>';
            }
        }
        echo $output;
    }

    public function uploadFoto(StoreFormProfilRequest $request, $idPelamar)
    {
        $foto = $request->file('uploadfoto');
        $ext = $foto->getClientOriginalExtension();

        if ($request->file('uploadfoto')->isValid()) {
            $foto_name = $idPelamar . "_" . date('YmdHis') . ".$ext";
            $upload_path = 'fotoupload';
            $request->file('uploadfoto')->move($upload_path, $foto_name);
            return $foto_name;
        }

        return false;
    }

    public function hapusFoto(Pelamar $req)
    {
        $exist = Storage::disk('foto')->exists($siswa->pasfoto);
        if (isset($siswa->pasfoto) && $exist) {
            $delete = Storage::disk('foto')->delete($siswa->pasfoto);
            if ($delete) {
                return true;
            }
            return false;
        }
    }

    public function insertProfil(StoreFormProfilRequest $req)
    {

        $input = $req->all();
        $updatePelamar = Pelamar::select('*', 'id as idpelamar')
            ->where('no_reg', $input['noreg'])
            ->first();

        if ($req->hasFile('uploadfoto')) {
            if ($updatePelamar->pasfoto !== '-') {
                $exist = Storage::disk('foto')
                    ->exists($updatePelamar->pasfoto);
                if ($exist) {
                    $delete = Storage::disk('foto')
                        ->delete($updatePelamar->pasfoto);
                }
            }
            $input['uploadfoto'] = $this->uploadFoto($req, $updatePelamar->idpelamar);
            $updatePelamar->pasfoto = $input['uploadfoto'];
        } else {
            $input['uploadfoto'] = '';
        }

        $updatePelamar->jenis_kelamin = $input['jenis_kelamin'];
        $updatePelamar->telp_wa = $input['nohp_wa'];
        $updatePelamar->telp1 = $input['nohp'];
        $updatePelamar->alamat_ktp1 = $input['alamatktp1'];
        $updatePelamar->alamat_domisili1 = $input['alamatdomisili1'];
        $updatePelamar->email1 = $input['email1'];
        $updatePelamar->jenis_identitas = $input['jenis_identitas'];
        $updatePelamar->status_nikah = $input['statusnikah'];
        $updatePelamar->status_bekerja = $input['statusbekerja'];
        $updatePelamar->deskripsi_diri = $input['deskripsi'];
        $tz = "Asia/Bangkok";
        $tgl_lahir = Carbon::createFromDate($input['tahun'], $input['bulan'] + 1, $input['tanggal'], $tz);
        $updatePelamar->tanggal_lahir = $tgl_lahir;

        // $updatePelamar->no_ktp = $input['no_identitas'];
        // $updatePelamar->alamat_ktp2 = $input['alamatktp2'];
        // $updatePelamar->kodepos_ktp = $input['kodeposktp'];
        // $updatePelamar->alamat_domisili2 = $input['alamatdomisili2'];
        // $updatePelamar->kodepos_domisili = $input['kodeposdom'];
        // $updatePelamar->email2 = $input['email2'];
        // $updatePelamar->no_identitas = $input['no_identitas'];

        if (session('propinsi_ktp') !== '0' &&
            session('kota_ktp') !== '0' &&
            session('kecamatan_ktp') !== '0' &&
            session('kelurahan_ktp') !== '0') {
            // dd('simpan lokasi ktp');
            $updatePelamar->kode_prov_ktp = session('propinsi_ktp');
            $updatePelamar->kode_kota_ktp = session('kota_ktp');
            $updatePelamar->kode_kec_ktp = session('kecamatan_ktp');
            $updatePelamar->kode_kel_ktp = session('kelurahan_ktp');
        }

        if (isset($input['equals_with_ktp']) == false || $input['equals_with_ktp'] !== null) {

            if (session('propinsi_dom') !== '0' &&
                session('kota_dom') !== '0' &&
                session('kecamatan_dom') !== '0' &&
                session('kelurahan_dom') !== '0') {

                $updatePelamar->kode_prov = session('propinsi_dom');
                $updatePelamar->kode_kota = session('kota_dom');
                $updatePelamar->kode_kec = session('kecamatan_dom');
                $updatePelamar->kode_kel = session('kelurahan_dom');
            }
        }

        session([
            'idfoto' => $input['uploadfoto'],
        ]);

        $updatePelamar->save();
        alert()->success('Success Message', 'Data Profil Anda Sudah Komplit');

        return redirect('menu_pelamar');
    }

}
