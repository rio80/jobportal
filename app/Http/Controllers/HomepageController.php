<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {

        $dataProv = $this->showProv();
        // $cekPelamar = DB::table('tb_mst_pelamar')
        // ->join('tb_ref_registrasi', 'tb_mst_pelamar.no_reg', '=', 'tb_ref_registrasi.id')
        // ->join('users', 'tb_ref_registrasi.user_id', '=', 'users.id')
        // ->where('users.id', $idUser)
        // ->first();
        // $idfoto = $cekPelamar->pasfoto;
        alert()->success('Success Message', 'Optional Title');
        return view('index', compact('dataProv'));
    }

    public function showProv()
    {
        $alamat = [];
        $getProv = Provinsi::select('id_prov', 'nama_prov')->get();

        foreach ($getProv as $dataProv) {
            $alamat[] = [
                'text' => $dataProv->nama_prov,
                'children' => $this->showKota($dataProv['id_prov']),
            ];
        }

        $toJson = json_encode($alamat);
        //     array(
        //         "" => $alamat,
        //         "paginate" => array(
        //             "more" => true,
        //         ),
        //     )
        // );
        return $toJson;
    }

    public function showKota($id_prov)
    {
        $getKota = Kota::select('id_kota as id', DB::raw('CONCAT(jenis ," ", nama_kota) as text'))
            ->where('id_prov', $id_prov)->get();
        // ->toJson(JSON_PRETTY_PRINT);

        return $getKota;
    }
}
