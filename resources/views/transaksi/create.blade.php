@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pengguna</div>
                <div class="card-body">
                   <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" placeholder="Tanggal Transaksi" >
                             @error('tanggal_transaksi')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" >
                             @error('jumlah')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Total Harga</label>
                            <input type="text" class="form-control" name="total_harga" placeholder="Total Harga" >
                             @error('total_harga')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div> 
                            <label>Nama Barang</label>
                            <select name="id_barang" id="id_barang" class="form-control">
                                @foreach($barang as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div> 
                            <label>Nama Pembeli</label>
                            <select name="id_pembeli" id="id_pembeli" class="form-control">
                                @foreach($pembeli as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
