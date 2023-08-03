@extends('dashboard.layout.app')

@section('contents')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kelas / Kelas</h1>
    <a href="{{route('kelas')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Kembali</a>
</div>
@include('component.alert')
<form method="POST" action="{{route('kelas.save.action')}}">
<div class="card shadow mb-4">
    <div class="card shadow mb-4">
        <div class="card-body">
        @csrf
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kode Kelas</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="kode" placeholder="Kode Kelas">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                </div>
            </div>

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option value="A">Active</option>
                        <option value="N">Non Active</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Simpan</span>
            </button>
        </div>
        <hr>
    </div>
</form>
@endsection
