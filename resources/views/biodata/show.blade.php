@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Post</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $biodata->nama_lengkap }}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $biodata->jenis_kelamin}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $biodata->tanggal_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" value="{{ $biodata->tempat_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $biodata->agama}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea type="text" name="alamat" class="form-control"  cols="20" rows="5" placeholder="Alamat" value="" disabled>{{ $biodata->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="{{ $biodata->telepon }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $biodata->email }}" disabled>
                        </div>
                         <div class="mb-3">
                            <img src="{{asset('images/biodata/' . $biodata->cover)}}" width="100">
                        </div>
                         <a href="{{ route('biodata.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
