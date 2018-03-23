@extends('hoca.layouts.app')
<style>
    .checkbox label:after {
        content: '';
        display: table;
        clear: both;
    }

    .checkbox .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.3em;
        height: 1.3em;
        float: left;
        margin-right: .5em;
    }

    .checkbox .cr .cr-icon {
        position: absolute;
        font-size: .8em;
        line-height: 0;
        top: 50%;
        left: 20%;
    }

    .checkbox label input[type="checkbox"] {
        display: none;
    }

    .checkbox label input[type="checkbox"]+.cr>.cr-icon {
        opacity: 0;
    }

    .checkbox label input[type="checkbox"]:checked+.cr>.cr-icon {
        opacity: 1;
    }

    .checkbox label input[type="checkbox"]:disabled+.cr {
        opacity: .5;
    }
</style>
@section('hoca')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('zaman_kaydet')}}" method="post">
                    {{csrf_field()}}
                    <table class="table">
                        <thead style="text-align: center">
                        <th>#</th>
                        <th>Pazartesi</th>
                        <th>Salı</th>
                        <th>Çarşamba</th>
                        <th>Perşembe</th>
                        <th>Cuma</th>
                        <th style="color: red">Cumartesi</th>
                        <th style="color: red">Pazar</th>
                        </thead>
                        <tbody style="text-align: center">
                        @foreach($zamanlar as $zaman)
                            <tr>
                                <td><strong>{{$zaman->zaman_araligi}}</strong></td>
                                @foreach($gunler as $gun)
                                    <td>
                                        <input type="checkbox" name="{{$gun->gun_adi}}{{$zaman->id}}"
                                        @if(\App\Model\HocaSaat::where(['hoca_id' => Auth::user()->id,'gun_id' => $gun->id,'saat_id' => $zaman->id])->first()) checked @endif />
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Güncelle</button>
                </form>
            </div>
        </div>
    </div>
@endsection