@extends('hoca.layouts.app')

@section('hoca')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Ders Adı</th>
                    <th>Ders Saati</th>
                    </thead>
                    <tbody>
                    @foreach($dHocalar as $dHoca)
                        <tr>
                            <td></td>
                            <td>{{$dHoca->ders->ders_adi}}</td>
                            <td>{{$dHoca->ders->ders_saati}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection