@extends('adminlte.master')

@section('content')

<div class="card ml-1 mt-2">
    <h3>Detail Komentar Pertanyaan</h3>
    @foreach ($komen as $komentar)   
    <div class="ml-3 mt-3">
        <input hidden name="idtanya" type="text">
        <p><b>User ID : </b>{{ Auth::user()->id }} </p>
        <p><b>Id Pertanyaan :</b> {{$komentar->pertanyaan_id}}</p>
        <p><b>Isi Komentar : </b> {{$komentar->isi}}</p>
    </div>
    <hr>
    @endforeach
</div>

@endsection