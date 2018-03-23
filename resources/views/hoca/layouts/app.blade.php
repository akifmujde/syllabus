@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <ul>
                    <li>
                        <a href="{{route('bos_zaman')}}">Boş Zaman Ayarla</a>
                    </li>
                    <li>
                        <a href="{{route('bos_zaman_goster')}}">Boş Zaman Göster</a>
                    </li>
                    <li>
                        <a href="{{route('ders_sec')}}">Ders Seç</a>
                    </li>
                    <li>
                        <a href="{{route('ders_goster')}}">Seçilen Dersleri Listele</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-9">
                @yield('hoca')
            </div>
        </div>
    </div>
@endsection