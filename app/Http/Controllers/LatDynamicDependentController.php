<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi as prov;
use App\Models\Kota as kota;
use App\Models\Kecamatan as kec;
use App\Models\Kelurahan as kel;
class LatDynamicDependentController extends Controller
{
    public function index(){
        $provList = prov::select()->get();
        // dd($provList);
        return view('lat_dynamic_dependent')->with('provList', $provList);
    }

    public function fetch(Request $req){
        $select = $req->get('select');
        $value = $req->get('value');
        $dependent = $req->get('dependent');

        $output = '<option value="">Pilih '.ucfirst($dependent).'</option>';

        if($select == 'provinsi'){
            $data = kota::select('id_kota', 'nama_kota')->where('id_prov', $value)->get();
            foreach($data as $row){
                $output .= '<option value="'.$row->id_kota.'">'.$row->nama_kota.'</option>';
            }
        }

        if($select == 'kota'){
            $data = kec::select('id_kec', 'nama_kec')->where('id_kota', $value)->get();
            foreach($data as $row){
                $output .= '<option value="'.$row->id_kec.'">'.$row->nama_kec.'</option>';
            }
        }

        if($select == 'kec'){
            $data = kel::select('id_kel', 'nama_kel')->where('id_kec', $value)->get();
            foreach($data as $row){
                $output .= '<option value="'.$row->id_kel.'">'.$row->nama_kel.'</option>';
            }
        }


        echo $output;
    }

    public function getLokasi(Request $req){
        dd($req->provinsi);
    }
}
