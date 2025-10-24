@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pembeli</div>
                <div class="card-body">
                   <form>
                        <div class="mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli"  value="{{ $pembeli->nama_pembeli }}" disabled>
                             @error('nama_pembeli')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin"  value="{{ $pembeli->jenis_kelamin }}" disabled>
                             @error('jenis_kelamin')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Telepon"  value="{{ $pembeli->telepon }}" disabled>
                             @error('telepon')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                       <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
