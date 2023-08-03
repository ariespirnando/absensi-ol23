@extends('dashboard.layout.app')

@section('contents_style')
<!-- Custom styles for this page -->
<link href="{{asset('template/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('contents_script')
<!-- Page level plugins -->
<script src="{{asset('template/dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('template/dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('template/dashboard/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('contents')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kelas / Tahun Ajaran</h1>
    <a href="{{route('add.ta')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tahunajarans as $t )
                    <tr>
                        <td>{{ $t->kode_tahun_ajaran}}</td>
                        <td>{{ $t->keterangan}}</td>
                        <td></td>
                        <td>
                            @if ($t->status == 'A')
                                Active
                            @else
                                Non Active
                            @endif
                        </td>
                        <td>61</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
