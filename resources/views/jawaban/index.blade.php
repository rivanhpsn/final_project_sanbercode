@extends('adminlte.master')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="card">    
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Jawaban</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Id Pertanyaan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($jawaban as $jawab)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$jawab->judul}}</td>
                    <td>{!!$jawab->isi!!}</td>
                    <td>{{$jawab->pertanyaan_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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