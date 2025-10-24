@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                   <form>
                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"  value="{{ $barang->nama_barang }}" disabled>
                             @error('nama_barang')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="merek" placeholder="Merek"  value="{{ $barang->merek }}" disabled>
                             @error('merek')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Harga"  value="{{ $barang->harga }}" disabled>
                             @error('harga')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" placeholder="Stok"  value="{{ $barang->stok }}" disabled>
                             @error('stok')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        
                       <a href="{{ route('barang.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
