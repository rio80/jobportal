<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormProfilRequest;
// use Auth;
use App\Models\Kecamatan as kec;
use App\Models\Kelurahan as kel;
use App\Models\Kota as kota;
use App\Models\Pelamar;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use View;
use Carbon\Carbon;

class PelamarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index($iduser)
    {
        $cekPelamar = DB::table('tb_mst_pelamar')
        ->join('tb_ref_registrasi', 'tb_mst_pelamar.no_reg', '=', 'tb_ref_registrasi.id')
        ->join('users', 'tb_ref_registrasi.user_id', '=','users.id')
        ->where('users.id', $iduser)
        ->first();
        if(($cekPelamar->nama == "-" || empty($cekPelamar->nama)) ||
        ($cekPelamar->pasfoto == "-" || empty($cekPelamar->pasfoto)) ||
        ($cekPelamar->telp1 == "-" || empty($cekPelamar->telp1)) ||
        ($cekPelamar->alamat_ktp1 == "-" || empty($cekPelamar->alamat_ktp1)) ||
        ($cekPelamar->kodepos_ktp == "-" || empty($cekPelamar->kodepos_ktp)) ||
        ($cekPelamar->alamat_domisili1 == "-" || empty($cekPelamar->alamat_domisili1))||
        ($cekPelamar->kodepos_domisili == "-" || empty($cekPelamar->kodepos_domisili)) ||
        ($cekPelamar->email1 == "-" || empty($cekPelamar->email1)) ||
        ($cekPelamar->kode_prov_ktp == "-" || empty($cekPelamar->kode_prov_ktp)) ||
        ($cekPelamar->kode_kota_ktp == "-" || empty($cekPelamar->kode_kota_ktp))||
        ($cekPelamar->kode_kec_ktp == "-" || empty($cekPelamar->kode_kec_ktp))||
        ($cekPelamar->kode_kel_ktp == "-" || empty($cekPelamar->kode_kel_ktp)) ||
        ($cekPelamar->kode_prov == "-" || empty($cekPelamar->kode_prov)) ||
        ($cekPelamar->kode_kota == "-" || empty($cekPelamar->kode_kota)) ||
        ($cekPelamar->kode_kec == "-" || empty($cekPelamar->kode_kec)) ||
        ($cekPelamar->kode_kel == "-" || empty($cekPelamar->kode_kel)) ||
        ($cekPelamar->jenis_identitas == "-" || empty($cekPelamar->jenis_identitas)) ||
        ($cekPelamar->no_identitas == "-" || empty($cekPelamar->no_identitas)) ||
        ($cekPelamar->status_nikah == "-" || empty($cekPelamar->status_nikah)) ||
        ($cekPelamar->status_bekerja == "-" || empty($cekPelamar->status_bekerja)) ||
        ($cekPelamar->deskripsi_diri == "-" || empty($cekPelamar->deskripsi_diri))){
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

    public function uploadFoto(StoreFormProfilRequest $request)
    {
        $foto = $request->file('uploadfoto');
        $ext = $foto->getClientOriginalExtension();

        if ($request->file('uploadfoto')->isValid()) {
            $foto_name = $request->email1 . "-" . date('YmdHis') . ".$ext";
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

    public function insertProfil($id, StoreFormProfilRequest $req)
    {

        $input = $req->all();
        if ($req->hasFile('uploadfoto')) {
            $input['uploadfoto'] = $this->uploadFoto($req);
        }
        $updatePelamar = Pelamar::where('no_reg', $input['noreg'])->first();
        // dd($input);
        
        $updatePelamar->no_ktp = $input['no_identitas'];
        $updatePelamar->jenis_kelamin = $input['jenis_kelamin'];
        $tz = "Asia/Bangkok";
        $tgl_lahir = Carbon::createFromDate($input['tahun'], $input['bulan'] + 1,$input['tanggal'], $tz);
        $updatePelamar->tanggal_lahir = $tgl_lahir;   

        if ($updatePelamar->kode_prov_ktp !== '0' && $input['propinsi_ktp'] !== '0' &&
        $updatePelamar->kode_kota_ktp !== '0' && $input['kota_ktp'] !== '0' &&
        $updatePelamar->kode_kec_ktp !== '0' && $input['kecamatan_ktp'] !== '0' &&
        $updatePelamar->kode_kel_ktp !== '0' && $input['kelurahan_ktp'] !== '0') {
            // dd('simpan lokasi ktp');
            $updatePelamar->kode_prov_ktp = $input['propinsi_ktp'];
            $updatePelamar->kode_kota_ktp = $input['kota_ktp'];
            $updatePelamar->kode_kec_ktp = $input['kecamatan_ktp'];
            $updatePelamar->kode_kel_ktp = $input['kelurahan_ktp'];
        }
      

        if ($updatePelamar->kode_prov !== '0' && $input['propinsi_dom'] !== '0' &&
        $updatePelamar->kode_kota !== '0' && $input['kota_dom'] !== '0' &&
        $updatePelamar->kode_kec !== '0' && $input['kecamatan_dom'] !== '0' &&
        $updatePelamar->kode_kel !== '0' && $input['kelurahan_dom'] !== '0') {

            $updatePelamar->kode_prov = $input['propinsi_dom'];
            $updatePelamar->kode_kota = $input['kota_dom'];
            $updatePelamar->kode_kec = $input['kecamatan_dom'];
            $updatePelamar->kode_kel = $input['kelurahan_dom'];
        }

        $updatePelamar->save();
    }

}
