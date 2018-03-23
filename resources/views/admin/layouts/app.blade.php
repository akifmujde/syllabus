@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <ul>
                    <li>
                        <a href="{{route('dersler')}}">Dersler</a>
                    </li>
                    <li>
                        <a href="{{route('hocalar')}}">Hocalar</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-9">
                @yield('admin')
            </div>
        </div>
    </div>
@endsection