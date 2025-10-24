@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pengguna</div>
                <div class="card-body">
                   <form>
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor" placeholder="nomor"  value="{{ $telepon->nomor }}" disabled>
                             @error('nomor')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nama Pengguna</label>
                            <input type="text" class="form-control" name="id_pengguna" placeholder="nama pengguna"  value="{{ $telepon->pengguna->nama }}" disabled>
                             @error('nama_pengguna')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                       <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
