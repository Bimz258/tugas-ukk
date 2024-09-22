@extends('layouts/app')
@section('content')
<form action="{{route('tamu.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Formulir Tambah Tamu</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{old('tanggal')}}">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label>Asal Tamu</label>
                        <input type="text" class="form-control" name="asal_tamu" value="{{old('asal_tamu')}}">
                    </div>
                    <div class="form-group">
                        <label>Uraian</label>
                        <input type="text" class="form-control" name="uraian" value="{{old('uraian')}}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection