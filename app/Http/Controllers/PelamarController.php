<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormPendidikanRequest as saveEdu;
use App\Http\Requests\StoreFormPengalamanRequest as saveExp;
use App\Http\Requests\StoreFormProfilRequest;
use App\Http\Requests\StoreFormSkillRequest as saveSkl;
// use Auth;
use App\Models\Kecamatan as kec;
use App\Models\Kelurahan as kel;
use App\Models\Keterampilan;
use App\Models\Kota as kota;
use App\Models\Pelamar;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Registrasi;
use App\Models\Bidang;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use View;
use PDF;

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

        session([
            'idfoto' => $cekPelamar->pasfoto,
            'nama' => $cekPelamar->nama,
            'noreg' => $cekPelamar->no_reg,
        ]);

        if (($cekPelamar->nama == "-" || empty($cekPelamar->nama)) ||
            ($cekPelamar->pasfoto == "-" || empty($cekPelamar->pasfoto)) ||
            ($cekPelamar->telp1 == "-" || empty($cekPelamar->telp1)) ||
            ($cekPelamar->alamat_ktp1 == "-" || empty($cekPelamar->alamat_ktp1)) ||
            ($cekPelamar->alamat_domisili1 == "-" || empty($cekPelamar->alamat_domisili1)) ||
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
            ($cekPelamar->status_nikah == "-" || empty($cekPelamar->status_nikah)) ||
            ($cekPelamar->status_bekerja == "-" || empty($cekPelamar->status_bekerja)) ||
            ($cekPelamar->deskripsi_diri == "-" || empty($cekPelamar->deskripsi_diri))) {
            alert()->warning('Warning Message', 'Harap Lengkapi Profil Anda');
            return redirect("/profil/$iduser/edit");
        }
        return view('pelamar.menu_pelamar');
    }

    public function lihat_cv()
    {
        return view('pelamar.lihat_cv');
    }

    public function print_cv()
    {
        $pdf = PDF::loadview('pelamar.print_cv');
        return $pdf->download('cv_jobportal');
        // return view('pelamar.print_cv');
    }

    public function lowongan_detail()
    {
        return view('pelamar.lowongan_detail');
    }

    public function pendidikan_new()
    {
        return view('pelamar.pendidikan_create');
    }

    public function pendidikan_view()
    {
        $noreg = session('noreg');
        $dataEdu = Pendidikan::where('no_reg', $noreg)->orderBy('id')->get();
        return view('pelamar.pendidikan_view', compact('dataEdu'));
    }

    public function pendidikanEdit(Pendidikan $edu)
    {
        $pendidikan = $edu;
        return view('pelamar.pendidikan_edit', compact('pendidikan'));
    }

    public function pendidikanInsert(saveEdu $req)
    {
        $noreg = session('noreg');

        $institusiUnique = Pendidikan::where([
            'no_reg' => $noreg,
            'tahun_lulus' => $req->tahun_lulus,
            'id_tingkat' => $req->id_tingkat,
        ])->get()->count();

        // Lakukan Pengecekan Data
        if ($institusiUnique == 0) {
            $insert = Pendidikan::create([
                'no_reg' => $noreg,
                'jurusan' => $req->jurusan,
                'nama_institusi' => $req->nama_institusi,
                'tahun_lulus' => $req->tahun_lulus,
                'bidang_studi' => $req->bidang_studi,
                'id_tingkat' => $req->id_tingkat,
            ]);

            return redirect('pendidikan_view');

        } else {
            alert()->warning(null, 'Data Sudah Ada');
            return redirect('pendidikan_new')->withInput();
        }

    }

    public function pendidikanUpdate(Pendidikan $edu, saveEdu $saveEdu)
    {
        $noreg = session('noreg');

        $pendidikan = $saveEdu;
        $institusiUnique = Pendidikan::where([
            'no_reg' => $noreg,
            'tahun_lulus' => $saveEdu->tahun_lulus,
            'id_tingkat' => $saveEdu->id_tingkat,
        ])
            ->where('id', '!=', $edu->id)
            ->get()->count();

        if ($institusiUnique == 0) {
            $data = $saveEdu->all();
            $update = $edu->update($data);
            return redirect('pendidikan_view');
        } else {

            alert()->warning(null, 'Data Sudah Ada');
            return view('pelamar.pendidikan_edit', compact('pendidikan'));

        }

    }

    public function profil(Pelamar $req, $iduser = null)
    {
        $no_reg = Registrasi::select(['id as id_reg'])->where('user_id', $iduser)->first();

        $pelamarTable = DB::table('tb_mst_pelamar')
            ->join('tb_ref_registrasi', 'tb_mst_pelamar.no_reg', '=', 'tb_ref_registrasi.id')
            ->select('tb_mst_pelamar.*')->where('tb_ref_registrasi.id', $no_reg->id_reg)->first();
        $data['pelamar'] = Pelamar::findOrFail($pelamarTable->id);

        $data['bidang_select'] = $data['pelamar']->bidang->pluck('id');

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
            'noreg' => $pelamarTable->no_reg,
        ]);
        return View::make('pelamar.form_profil', $data);
    }

    public function pengalaman_view()
    {
        $noreg = session('noreg');
        $dataExp = Pengalaman::where('no_reg', $noreg)->orderBy('id')->get();
        return view('pelamar.pengalaman_view', compact('dataExp'));
    }

    public function pengalaman_short()
    {
        return view('pelamar.pengalaman_short');
    }

    public function pengalaman_create()
    {
        return view('pelamar.pengalaman_create');
    }

    public function insertPengalaman(saveExp $req)
    {

        $noreg = session('noreg');
        $tz = "Asia/Bangkok";
        $tgl_gabung = Carbon::createFromDate($req->tahun_awal, $req->bulan_awal + 1, '01', $tz);
        $tgl_berhenti = Carbon::createFromDate($req->tahun_akhir, $req->bulan_akhir + 1, '01', $tz);

        $insert = Pengalaman::create([
            'nama_perusahaan' => $req->nama_perusahaan,
            'id_jenis_perusahaan' => $req->id_jenis_perusahaan,
            'id_jenis_pekerjaan' => $req->id_jenis_pekerjaan,
            'jabatan' => $req->jabatan,
            'tugas_tanggungjawab' => $req->tugas_tanggungjawab,
            'tanggal_gabung' => $tgl_gabung,
            'tanggal_berhenti' => $tgl_berhenti,
            'no_reg' => $noreg,
        ]);
    }

    public function editPengalaman(Pengalaman $exp)
    {
        $pengalaman = $exp;
        // dd($exp->tanggal_gabung);
        $data['getYearJoin'] = Carbon::createFromFormat('M Y', $exp->tanggal_gabung)->year;
        $data['getMonthJoin'] = Carbon::createFromFormat('M Y', $exp->tanggal_gabung)->month - 1;
        $data['getYearEnd'] = Carbon::createFromFormat('M Y', $exp->tanggal_berhenti)->year;
        $data['getMonthEnd'] = Carbon::createFromFormat('M Y', $exp->tanggal_berhenti)->month - 1;

        $data = json_decode(json_encode($data));

        return view('pelamar.pengalaman_edit', compact('pengalaman', 'data'));
    }

    public function updatePengalaman(Pengalaman $exp, saveExp $req)
    {

        $tz = "Asia/Bangkok";
        $day = '01';
        $first_month = $req->bulan_awal + 1;
        $first_year = $req->tahun_awal;
        $end_month = $req->bulan_akhir + 1;
        $end_year = $req->tahun_akhir;
        $tgl_gabung = Carbon::createFromDate($first_year, $first_month, $day, $tz);
        $tgl_berhenti = Carbon::createFromDate($end_year, $end_month, $day, $tz);

        $exp->tanggal_gabung = $tgl_gabung;
        $exp->tanggal_berhenti = $tgl_berhenti;
        $exp->save();

        $input = $req->all();
        $update = $exp->update($input);

        return redirect('pengalaman_view');
    }

    public function skillView()
    {
        // $collect = Keterampilan::select('level', 'keterampilan')->get();
        $collect = Keterampilan::join('tb_ref_level',
            'tb_mst_keahlian.level', '=', 'tb_ref_level.id')
            ->select('tb_ref_level.id as idlevel', 'tb_ref_level.nama as level', 'keterampilan')
            ->orderBy('tb_ref_level.id', 'asc')
            ->get();

        $group = $collect->groupBy('level')->toArray();

        $hasil = [];
        $arrayGroup;
        foreach ($group as $key) {

            $arrayTerampil = [];
            $level = $key[0]['level'];
            $id = $key[0]['idlevel'];

            foreach ($key as $data) {
                array_push($arrayTerampil, $data['keterampilan']);
            }

            array_push($hasil, array(
                'id' => $id,
                'keterampilan' => implode($arrayTerampil, ', '),
                'level' => $level,
            ));

        }

        $hasil = json_decode(json_encode($hasil), false);

        return view('pelamar.skill_view', compact('hasil'));
    }

    public function skillCreate()
    {
        session([
            'skill_edit_mode' => false,
        ]);

        return view('pelamar.skill_create');
    }

    public function skillInsert(saveSkl $req)
    {

        $error = 1;

        $insert = Keterampilan::create([
            'no_reg' => session('noreg'),
            'level' => $req->level,
            'keterampilan' => $req->keterampilan,
        ]);

        $data = array(null);

        if ($insert != null) {
            $error = 0;
            $data = array(
                'level' => $req->level,
                'keterampilan' => $req->keterampilan,
            );
        }

        $json = json_encode(array(
            'error' => $error,
            'message' => 'Berhasil',
            'data' => $data)
        );

        return $json;
    }

    public function skillViewEdit($id)
    {

        session([
            'skill_edit_mode' => true,
            'skill_edit_id' => $id,
        ]);

        return view('pelamar.skill_edit');
    }

    public function skillUpdate(Request $skill)
    {
        session([
            'skill_edit_mode' => false,
        ]);

        $update = Keterampilan::select('*')->where('id' ,$skill->id)->first();
        $update->level =$skill->level ;
        $update->keterampilan = $skill->keterampilan;
        $update->save();

        return redirect('skill_view');
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
        if ((session('propinsi_ktp') !== '0' && session('propinsi_ktp') !== null) &&
            (session('kota_ktp') !== '0' && session('kota_ktp') !== null) &&
            (session('kecamatan_ktp') !== '0' && session('kecamatan_ktp') !== null) &&
            (session('kelurahan_ktp') !== '0' && session('kelurahan_ktp') !== null)) {
            $updatePelamar->kode_prov_ktp = session('propinsi_ktp');
            $updatePelamar->kode_kota_ktp = session('kota_ktp');
            $updatePelamar->kode_kec_ktp = session('kecamatan_ktp');
            $updatePelamar->kode_kel_ktp = session('kelurahan_ktp');
        }
        if (isset($input['equals_with_ktp']) == false || $input['equals_with_ktp'] == null) {

            if (session('propinsi_dom') !== '0' &&
                session('kota_dom') !== '0' &&
                session('kecamatan_dom') !== '0' &&
                session('kelurahan_dom') !== '0') {

                $updatePelamar->kode_prov = session('propinsi_dom');
                $updatePelamar->kode_kota = session('kota_dom');
                $updatePelamar->kode_kec = session('kecamatan_dom');
                $updatePelamar->kode_kel = session('kelurahan_dom');
            }
        } else {
            $updatePelamar->kode_prov = $updatePelamar->kode_prov_ktp;
            $updatePelamar->kode_kota = $updatePelamar->kode_kota_ktp;
            $updatePelamar->kode_kec = $updatePelamar->kode_kec_ktp;
            $updatePelamar->kode_kel = $updatePelamar->kode_kel_ktp;
        }

        session([
            'idfoto' => $input['uploadfoto'],
        ]);

        $updatePelamar->bidang()->sync($req->input('minat'));

        $updatePelamar->save();
        alert()->success('Success Message', 'Data Profil Anda Sudah Komplit');

        return redirect('menu_pelamar');
    }

}
