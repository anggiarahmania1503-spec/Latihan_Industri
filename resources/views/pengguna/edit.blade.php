@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pengguna</div>
                <div class="card-body">
                   <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_pengguna" placeholder="Nama"  value="{{ $pengguna->nama_pengguna }}">
                             @error('nama_pengguna')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
