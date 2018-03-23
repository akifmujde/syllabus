@extends('admin.layouts.app')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                        <thead>
                        <th scope="col">#</th>
                        <th scope="col">Ders Adı</th>
                        <th scope="col">Ders Yayın Adresi</th>
                        <th scope="col">Ders Saati</th>
                        <th scope="col"></th>
                        </thead>
                        <tbody>
                        @foreach($dersler as $ders)
                            <tr>
                                <th scope="row">{{$ders->id}}</th>
                                <td>{{$ders->ders_adi}}</td>
                                <td>{{$ders->ders_slug}}</td>
                                <td>{{$ders->ders_saati}}</td>
                                <td>
                                    <a href="{{route('ders_duzenle',['ders_slug' => $ders->ders_slug])}}" class="btn btn-link">Detaylar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        <br><hr style="border-color: black;background-color: black"><br>
        <div class="row">
            <div class="col-md-12">
                <h2>Ders Ekle</h2>
            </div>
            <br><br>
            <div class="col-md-12">
                <form action="{{route('ders_ekle')}}" method="post">
                    @csrf
                    <label>Ders Adı : </label>
                    <input name="ders_adi" class="form-control">
                    <label>Ders Saati : </label>
                    <input name="ders_saati" class="form-control"><br>
                    <button type="submit" class="btn btn-success">
                        Ders Ekle
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection