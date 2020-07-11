@extends('adminlte.master')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="card">    
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Pertanyaan</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaan as $key => $pertanyaan)
                        <tr id="{{$pertanyaan->id}}">
                        <td> {{ $key + 1}}</td>
                        <td> {{ $pertanyaan -> judul}}</td>
                        <td> {!! $pertanyaan -> isi!!}</td>
                        <td>
                            {{-- <a class="btn btn-primary"  href="/jawaban/{{$pertanyaan->id}}" role="button" >Jawab</a> --}}
                            <a class="btn btn-primary"  href="/pertanyaan/{{$pertanyaan->id}}" role="button" >Detail</a>
                            <a class="btn btn-primary"  href="/pertanyaan/{{$pertanyaan->id}}/edit" role="button" >Edit</a>
                            <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        {{-- <td> {{ $pertanyaan -> like}}</td>
                        <td> {{ $pertanyaan -> dislike}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class= "ml-3 mt-3" align="right">
                <a class="btn btn-primary"  href="/pertanyaan/create" role="button" >+ Tambah Pertanyaan</a>
                <a class="btn btn-info"  href="/jawaban" role="button" >Semua Jawaban</a>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection

@push('jsDT')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>
@endpush

@push('cssDT')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endpush