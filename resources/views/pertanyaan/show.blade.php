@extends('adminlte.master')

@section('content')
<div class="card">
    <div class="ml-3 mt-3">
      <h3>Detail Pertanyaan</h3>
      <input hidden name="idtanya" value="{{$pertanyaan->id}}" type="text">
      <p>Judul pertanyaan : {{$pertanyaan->judul}}</p>
      <p>Isi pertanyaan : {!!$pertanyaan->isi!!}</p>
      <p>Tanggal dibuat : {{$pertanyaan->created_at}}</p>
      <p>Tanggal diperbaharui : {{$pertanyaan->updated_at}}</p>
      @foreach($pertanyaan->tags as $tag) 
        <button class="btn btn-success btn-sm mb-2"> {{$tag->nama}} </button>
      @endforeach
    </div>
</div>
<a href="/jawaban/{{$pertanyaan->id}}/edit" class="btn btn-primary ml-3">+ Jawaban</a>
@endsection