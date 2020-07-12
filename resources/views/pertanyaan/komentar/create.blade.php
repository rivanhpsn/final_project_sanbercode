@extends('adminlte.master')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
@endpush

@section('content')
<div class="card">
<div class="ml-3">
  <div class="card-header">
    <h3 class="card-title">Tambah Komentar Pertanyaan</h3>
  </div>
    <form action="/pertanyaan/komentar" method="POST">
        @csrf
        <div class="card-body">
        <div>
          <label for="user_id" value="">User id :</label>
          <input type="text" readonly name="user_id" id="user_id" value="{{ Auth::user()->id }}">
        </div>
          <div class="form-group">
            <label for="isi">Isi Komentar : </label>
            <textarea name="isi" class="form-control my-editor">{!! old('isi', $isi ?? '') !!}</textarea>
          </div>
        
        <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>
</div>
@endsection