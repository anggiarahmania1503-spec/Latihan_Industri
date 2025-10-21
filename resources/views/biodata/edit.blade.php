@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Post</div>
                <div class="card-body">
                   <form action="{{ route('biodata.update', $biodata->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $biodata->nama_lengkap }}" >
                            @error('nama_lengkap')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                               <select name="jenis_kelamin" id="" value="{{ $biodata->jenis_kelamin }}" >
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                               </select>
                               @error('jenis_kelamin')
                               <small style= "color:red">{{ $message }}</small>
                               @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $biodata->tanggal_lahir }}">
                            @error('tanggal_lahir')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" value="{{ $biodata->tempat_lahir }}">
                            @error('tempat_lahir')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="agama" class="form-control" id="" value="{{ $biodata->agama }}">
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
                            <textarea type="text" name="alamat" class="form-control"  cols="20" rows="5" placeholder="Alamat" value="">{{ $biodata->alamat }}</textarea>
                            @error('alamat')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="{{ $biodata->telepon }}">
                            @error('telepon')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $biodata->email }}">
                            @error('email')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <img src="{{asset('images/biodata/' . $biodata->cover)}}" width="100">
                        </div>
                        <div class="mb-3">
                            <label>Cover</label>
                            <input type="file" class="form-control" name="cover">
                    
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
