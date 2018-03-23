@extends('admin.layouts.app')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <table class="table">
                    <thead>
                    <th scope="col">#</th>
                    <th scope="col">Hoca Adı</th>
                    <th scope="col">E Mail Adresi</th>
                    <th scope="col"></th>
                    </thead>
                    <tbody>
                    @foreach($hocalar as $hoca)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$hoca->name}}</td>
                            <td>{{$hoca->email}}</td>
                            <td>
                                <a href="{{route('hoca_goster',['hoca_adi' => $hoca->name])}}">{{route('hoca_goster',['hoca_adi' => $hoca->name])}}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection