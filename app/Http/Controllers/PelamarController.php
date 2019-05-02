<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Provinsi as prov;
use App\Models\Kota as kota;
use App\Models\Kecamatan as kec;
use App\Models\Kelurahan as kel;

class PelamarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        return view('pelamar.menu_pelamar');
    }

    public function print_cv(){
        return view('pelamar.print_cv');
    }

    public function lowongan_detail(){
        return view('pelamar.lowongan_detail');
    }

    public function pendidikan_form(){
        return view('pelamar.pendidikan_form');
    }

    public function pendidikan_view(){
        return view('pelamar.pendidikan_view');
    }

    public function profil(){
        $provList = prov::select()->get();

        $stat_nikah = DB::table('tb_ref_statusnikah')
                    ->select('nama', 'id')
                    ->get();

        $stat_kerja = DB::table('tb_ref_statuskerja')
                    ->select('nama', 'id')
                    ->get();

        return view('pelamar.form_profil', 
        compact('provList', 'stat_nikah','stat_kerja'));
    }

    public function pengalaman_short(){
        return view('pelamar.pengalaman_short');
    }

    public function pengalaman_long(){
        return view('pelamar.pengalaman_long');
    }

    public function pengalaman_view(){
        return view('pelamar.pengalaman_view');
    }

    public function menu_resume(){
        return view('pelamar.menu_pelamar');
    }



    public function fetch_lokasi(Request $req){
        $select = $req->get('select');
        $value = $req->get('value');
        $dependent = (explode("_", $req->get('dependent')))[0];

        $output = '<option value="">Pilih '.ucfirst($dependent).'</option>';

        if($select == 'propinsi_ktp' || $select == 'propinsi_dom'){
            $data = kota::select('id_kota', 'jenis', 'nama_kota')->where('id_prov', $value)->get();
            foreach($data as $row){
                $output .= '<option value="'.$row->id_kota.'">'.$row->jenis." ".$row->nama_kota.'</option>';
            }
        }

        if($select == 'kota_ktp' || $select == 'kota_dom'){
            $data = kec::select('id_kec', 'nama_kec')->where('id_kota', $value)->get();
            foreach($data as $row){
                $output .= '<option value="'.$row->id_kec.'">'.$row->nama_kec.'</option>';
            }
        } 

        if($select == 'kecamatan_ktp' || $select == 'kecamatan_dom'){
            $data = kel::select('id_kel', 'nama_kel')->where('id_kec', $value)->get();
            foreach($data as $row){
                $output .= '<option value="'.$row->id_kel.'">'.$row->nama_kel.'</option>';
            }
        } 
        

        echo $output;
    }
}
