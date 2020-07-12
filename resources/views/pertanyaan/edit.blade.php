@extends('adminlte.master')

@section('content')
<div class="card">
  <div class="ml-3">
    <div class="card-header">
      <h3 class="card-title">Edit Pertanyaan</h3>
    </div>
  <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class="card-body">
          <div class="form-group">
              <label for="name">Judul Pertanyaan : </label>
          <input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}" placeholder="Masukkan judul pertanyaan" id="judul">
          </div>
            <div class="form-group">
              <label for="description">Isi Pertanyaan : </label>
              <textarea type="text" class="form-control" name="isi"  id="isi" placeholder="Masukkan isi pertanyaan">{!!$pertanyaan->isi!!}</textarea>
            </div>
            <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
  </div>
</div>

<script src="{{asset('adminlte/tinymce/js/tinymce/tinymce.min.js')}}"></script>

    <script>
      tinymce.init({
        selector: '#isi'
      });
    </script>
@endsection