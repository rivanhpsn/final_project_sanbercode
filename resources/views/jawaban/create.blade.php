@extends('adminlte.master')

@section('content')
<div class="card">
<div class="ml-3">
  <div class="card-header">
    <h3 class="card-title">Input Jawaban</h3>
  </div>
    <form action="/jawaban" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul Jawaban : </label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan judul jawaban" id="judul">
            </div>

            <div class="form-group">
                <label for="isi">Isi jawaban : </label>
                <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan isi jawaban">
            </div>
            <div class="form-group">
                <label for="pertanyaan_id">Id Pertanyaan : </label>
                <input type="text" class="form-control" readonly name="pertanyaan_id" value="{{$pertanyaan->id}}">
            </div>

            <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
            <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">

          <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </div>
      </form>
</div>
</div>
@endsection