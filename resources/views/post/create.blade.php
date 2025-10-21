@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Post</div>
                <div class="card-body">
                   <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label>Tittle</label>
                            <input type="text" class="form-control" name="tittle" placeholder="tittle" >
                            @error('tittle')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content" placeholder="content">
                             @error('content')
                            <small style= "color:red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Cover</label>
                            <input type="file" class="form-control" name="cover" placeholder="Cover">
                             @error('content')
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
