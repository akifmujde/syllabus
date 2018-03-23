@extends('admin.layouts.app')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Ders Bilgileri</h2><br>
            </div>
            <div class="col-md-12">
                <form action="{{route('ders_kaydet')}}" method="post">
                    @csrf
                    <label>Ders Adı : </label>
                    <input name="ders_adi" class="form-control" value="{{$ders->ders_adi}}">

                    <label>Ders Yayın Adresi : </label>
                    <input name="ders_slug" class="form-control" disabled value="{{$ders->ders_slug}}">

                    <input name="id" value="{{$ders->id}}" hidden>

                    <label>Ders Saati : </label>
                    <input name="ders_saati" class="form-control" value="{{$ders->ders_saati}}"><br>

                    <button type="submit" class="btn btn-success">
                        Dersi Güncelle
                    </button>
                </form>
            </div>
        </div>
        <br><hr style="border-color: black;background-color: black"><br>
        <div class="row">
            <div class="col-md-12">
                <h2>Dersi Alan Hocalar</h2><br>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th scope="col">#</th>
                    <th scope="col">Hoca Adı</th>
                    <th scope="col">Hoca e-mail bilgisi</th>
                    <th scope="col"></th>
                    </thead>
                    <tbody>
                    @foreach($dHocalar as $dHoca)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$dHoca->hoca->name}}</td>
                            <td>{{$dHoca->hoca->email}}</td>
                            <td>
                                <a href="{{route('hoca_goster',['hoca_adi' => $dHoca->name])}}">{{route('hoca_goster',['hoca_adi' => $dHoca->name])}}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row"><div class="col-md-12"></div></div>
    </div>
@endsection