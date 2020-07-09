@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
<div class="card">
<div class="ml-3">
  <div class="card-header">
    <h3 class="card-title">Tambah Pertanyaan</h3>
  </div>
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
        <div class="form-group">
            <label for="name">Judul Pertanyaan : </label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul pertanyaan" id="judul">
        </div>
          <div class="form-group">
            <label for="description">Isi Pertanyaan : </label>
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan isi pertanyaan">
          </div>
        <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tag" name="tag" placeholder="tag">
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>
</div>
</div>
@endsection