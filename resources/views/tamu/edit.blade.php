@extends('layouts/app')
@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{$err}}</p>
@endforeach
@endif
<form action="{{url('tamu/' .$data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Formulir Edit Tamu</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label>Asal Tamu</label>
                        <input type="text" class="form-control" name="asal_tamu" value="{{$data->asal_tamu}}">
                    </div>
                    <div class="form-group">
                        <label>Uraian</label>
                        <input type="text" class="form-control" name="uraian" value="{{$data->uraian}}">
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