<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Dersler;
use App\Model\DersHoca;

class DerslerController extends Controller
{

    #   Derslerin alındığı fonksiyon

    public function get_dersler(){
        $dersler = Dersler::all();
        return view('admin/ders/goster',['dersler' => $dersler]);
    }

    #   Ders eklendiği route olayı
    public function post_ders_ekle(Request $request){
        $ders_ekle = new Dersler();
        $ders_ekle->fill($request->all());
        $ders_ekle->ders_slug = str_slug($request->input('ders_adi'));
        $ders_ekle->save();
        return redirect()->route('dersler');
    }

    #   İstenilen dersin bulunduğu fonksiyon
    public function get_ders_duzenle($ders_slug){
        $ders = Dersler::where(['ders_slug' => $ders_slug])->first();
        $dHocalar = DersHoca::where('ders_id',$ders->id)->get();
        return view('admin/ders/duzenle',['ders' => $ders,'dHocalar' => $dHocalar]);
    }

    #   Seçilen dersteki değişikliklerin kayıt edildiği fonksiyon
    public function post_ders_duzenle(Request $request){
        $ders = Dersler::find($request->input('id'));
        $ders->ders_adi = $request->input('ders_adi');
        $ders->ders_saati = $request->input('ders_saati');
        $ders->ders_slug = str_slug($request->input('ders_adi'));
        $ders->save();
        return redirect()->route('dersler');
    }
}
