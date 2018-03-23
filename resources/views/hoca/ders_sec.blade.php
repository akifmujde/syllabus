@extends('hoca.layouts.app')

@section('hoca')
    <div class="container">
        <form action="{{route('ders_secim')}}" method="post">
            {{csrf_field()}}
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
                                <th scope="row"></th>
                                <td>{{$ders->ders_adi}}</td>
                                <td>{{$ders->ders_slug}}</td>
                                <td>{{$ders->ders_saati}}</td>
                                <td>
                                    <input type="checkbox" name="{{$ders->id}}"
                                        @if(\App\Model\DersHoca::where(['ders_id' => $ders->id,'hoca_id' => Auth::user()->id])->first())
                                            checked
                                        @endif
                                    >
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12" style="text-align: center">
                    <button type="submit" class="btn btn-success btn-block">
                        Ders Al!
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection