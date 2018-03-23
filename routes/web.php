<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'egitimci','middleware' => 'hoca'], function (){
    #   Hoca Sayfasına yönlendirme
    Route::view('/', 'hoca/layouts/app')->name('hoca');

    #   -----------------   Hocalar ile ilgili yönlendirme olayları -------------------------------
    Route::get('/Bos-Zaman-Belirle','HocaSaatController@get_zaman_belirle')->name('bos_zaman');

    Route::get('/Bos-Zaman-Goster','HocaSaatController@get_zaman_goster')->name('bos_zaman_goster');

    Route::post('/zaman-kaytet','HocaSaatController@post_zaman_belirle')->name("zaman_kaydet");

    Route::get('/Ders-Sec','DersHocaController@get_ders_sec')->name('ders_sec');

    Route::get('/Ders-Goster','DersHocaController@get_ders_goster')->name('ders_goster');

    Route::post('/ders-kayidi','DersHocaController@post_ders_ekle')->name("ders_secim");
});

Route::group(['prefix' => 'admin','middleware' => 'admin'],function (){

    #   Admin Sayfasına yönlendirme
    Route::view('/', 'admin/layouts/app', ['name' => 'admin']);

    #   -----------------   DERSLER İLE İLGİLİ YÖNLENDİRME OLAYLARI -------------------------------

    #   Derslerin çekildiği route
    Route::get('/dersler','DerslerController@get_dersler')->name('dersler');

    #   Ders ekleme işleminin yapıldığı route
    Route::post('/dersler','DerslerController@post_ders_ekle')->name('ders_ekle');

    #   Düzenlenecek dersin çekildiği route
    Route::get('/dersler/{ders_slug}','DerslerController@get_ders_duzenle')->name('ders_duzenle');

    #   Düzenlenen dersin kayıt edildiği route
    Route::post('/ders-kayit','DerslerController@post_ders_duzenle')->name('ders_kaydet');

    #   Hocaların sergilendiği sayfa
    Route::get('/hocalar','DersHocaController@get_hocaları_goster')->name('hocalar');

    #   Görüntülenecek hocanın çekildiği route
    Route::get('/hocalar/{hoca_adi}','DersHocaController@get_hoca_goster')->name('hoca_goster');
    /*
    Route::post('','');
    Route::get('','');
    */

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
