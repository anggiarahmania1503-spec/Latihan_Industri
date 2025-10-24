@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kelas</div>
                <div class="card-body">
                   <form>
                        <div class="mb-3">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_pengguna" placeholder="Nama"  value="{{ $kelas->nama_kelas }}" disabled>
                             @error('nama_kelas')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                       <a href="{{ route('kelas.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
