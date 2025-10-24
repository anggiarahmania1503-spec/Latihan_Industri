@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Telepon</div>
                <div class="card-body">
                   <form action="{{ route('murid.update', $murid->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $murid->nama_lengkap }}" >
                            @error('nama_lengkap')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis kelamain : </label>
                            <input type="radio" name="jenis_kelamin" value= "laki-laki" >Laki-laki
                            <input type="radio" name="jenis_kelamin" value= "perempuan" >Perempuan
                             @error('jenis_kelamin')
                            <small style="color:red"> {{$message}} </small>                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $murid->tanggal_lahir }}">
                            @error('tanggal_lahir')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" value="{{ $murid->tempat_lahir }}">
                            @error('tempat_lahir')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="agama" class="form-control" id="" value="{{ $murid->agama }}">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konguchu">Konguchu</option>
                            </select>
                            @error('agama')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea type="text" name="alamat" class="form-control"  cols="20" rows="5" placeholder="Alamat" value="">{{ $murid->alamat }}</textarea>
                            @error('alamat')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $murid->email }}">
                            @error('email')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nama Kelas</label>
                            <select class="form-control" name="id_kelas" id="">
                                @foreach ($kelas as $data)
                                    <option value="{{ $data->id }}" {{ $data->id ==$data->id_kelas ? 'selected' : '' }} > {{ $data->nama_kelas}} </option>
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