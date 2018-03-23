@extends('hoca.layouts.app')

@section('hoca')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Gün</th>
                        <th>Zaman</th>
                    </thead>
                    <tbody>
                        @foreach($hZamanlar as $hZaman)
                            <tr>
                                <td>{{$hZaman->id}}</td>
                                <td>{{$hZaman->gun->gun_adi}}</td>
                                <td>{{$hZaman->saat->zaman_araligi}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection