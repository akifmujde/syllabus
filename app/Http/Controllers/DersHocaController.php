<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Dersler;
use App\Model\DersHoca;
use Illuminate\Support\Facades\Auth;

class DersHocaController extends Controller
{
    public function get_ders_sec(){
        $dersler = Dersler::all();
        return view('hoca/ders_sec',['dersler' => $dersler]);
    }

    public function get_ders_goster(){
        $dHocalar = DersHoca::where(['hoca_id' => Auth::user()->id])->get();
        return view('hoca/ders_goster',['dHocalar' => $dHocalar]);
    }

    public function post_ders_ekle(Request $request){
        DersHoca::truncate();
        $dersler = Dersler::all();
        foreach ($dersler as $ders){
            if($request->input($ders->id)){
                DersHoca::create(['ders_id' => $ders->id,'hoca_id' => Auth::user()->id]);
            }
        }
        return redirect()->route('ders_goster');
    }

    public function get_hocaları_goster(){
        $hocalar = User::where(['role_id' => 1])->get();
        return view('admin/hocalar/goster',['hocalar' => $hocalar]);
    }

    public function get_hoca_goster($hoca_adi){
        $hoca = User::where(['name' => $hoca_adi])->first();
        return view('admin/hocalar/duzenle',['hoca' => $hoca]);
    }
}
