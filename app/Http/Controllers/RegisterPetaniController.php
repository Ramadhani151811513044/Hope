<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Petani;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Support\Str;

class RegisterPetaniController extends Controller
{
    //
    public function index(){
        $petani = Petani::paginate(10);
        return view ('petani',compact('petani'));
    }

    public function create()
    {   $provinsi = Provinsi::pluck('NAMA_PROVINSI','ID_PROVINSI');
        return view('/formpetani',compact('provinsi'));
    }

    public function kota()
    {   
        $id_provinsi = $_POST['id'];
        $kota = Kota::where("ID_PROVINSI",$id_provinsi)->pluck('NAMA_KOTA','ID_KOTA');
        return  response()->json($kota);
    }

    public function kecamatan()
    {   
        $id_kota = $_POST['id'];
        $kecamatan = Kecamatan::where("ID_KOTA",$id_kota)->pluck('NAMA_KECAMATAN','ID_KECAMATAN');
        return  response()->json($kecamatan);
    }

    public function kelurahan()
    {   
        $id_kecamatan = $_POST['id'];
        $kelurahan = Kelurahan::where("ID_KECAMATAN",$id_kecamatan)->pluck('NAMA_KELURAHAN','ID_KELURAHAN');
        return  response()->json($kelurahan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'NAMA_PETANI' => 'required',
            'NAMA_PERUSAHAAN' => 'required',
            'ALAMAT_PETANI' => 'required',
            'EMAIL_PETANI' => 'required',
            'NOHP_PETANI' => 'required'
        ]);

        Petani::create([
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA_PETANI' => $request->NAMA_PETANI,
            'NAMA_PERUSAHAAN' => $request->NAMA_PERUSAHAAN,
            'ALAMAT_PETANI' => $request->ALAMAT_PETANI,
            'EMAIL_PETANI' => $request->EMAIL_PETANI,
            'NOHP_PETANI' => $request->NOHP_PETANI
            
        ]);
        return redirect('/petani');
        }
}
