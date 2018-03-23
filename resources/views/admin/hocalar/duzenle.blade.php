@extends('admin.layouts.app')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hoca Bilgileri</h2><br>
            </div>
            <div class="col-md-12">
                <label>Hoca Adı : </label>
                <br>
                <label class="form-control">{{$hoca->name}}</label>
            </div>
            <div class="col-md-12">
                <label>Hoca E Mail Adresi : </label>
                <br>
                <label class="form-control">{{$hoca->email}}</label>
            </div>
        </div>
        <br><hr style="border-color: black;background-color: black"><br>
        <div class="row">
            <div class="col-md-12">
                <h2>Hocanın Aldığı Dersler</h2><br>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th scope="col">#</th>
                    <th scope="col">Ders Adı</th>
                    <th scope="col">Ders Saat Bilgisi</th>
                    </thead>
                    <tbody>
                    @foreach($hoca->dersler as $dHoca)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$dHoca->ders->ders_adi}}</td>
                            <td>{{$dHoca->ders->ders_saati}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row"><div class="col-md-12"></div></div>
    </div>
@endsection