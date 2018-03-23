<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Zamanlar;
use App\Model\Gunler;
use App\Model\HocaSaat;
use Illuminate\Support\Facades\Auth;

class HocaSaatController extends Controller
{
    public function get_zaman_belirle(){
        $zamanlar = Zamanlar::all();
        $gunler = Gunler::all();

        return view('hoca/zaman_sec',['zamanlar' => $zamanlar, 'gunler' => $gunler]);
    }

    public function get_zaman_goster(){
        $hocaZamanlar = HocaSaat::where(['hoca_id' => Auth::user()->id])->orderBy('gun_id','asc','saat_id','asc')->get();
        return view('hoca/zaman_goster',['hZamanlar' => $hocaZamanlar]);
    }

    public function post_zaman_belirle(Request $request){
        HocaSaat::truncate();
        $zamanlar = Zamanlar::all();
        $gunler = Gunler::all();
        foreach ($gunler as $gun){
            foreach ($zamanlar as $zaman){
                if($request->input($gun->gun_adi.$zaman->id)){
                    HocaSaat::create(['hoca_id' => Auth::id(), 'gun_id' => $gun->id, 'saat_id' =>$zaman->id]);
                }
            }
        }
        return redirect()->route('bos_zaman_goster');
    }
}
