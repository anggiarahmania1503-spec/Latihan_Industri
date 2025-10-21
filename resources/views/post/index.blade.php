@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Post</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <a href="{{ route('post.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tittle</th>
                            <th scope="col">Content</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($posts as $data)
                            <tr>
                            <th>{{$no++}}</th>
                            <td>{{$data->tittle}}</td>
                            <td>{{$data->content}}</td>
                            <td><img src="{{asset('images/post/' . $data->cover)}}" width="100"></td>
                            <td>
                                <a href="{{ route('post.edit',$data->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('post.show',$data->id) }}" class="btn btn-warning">Show</a>
                                <form action="{{ route('post.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return connfirm('Apakah Anda Yakin')">Delete</button>

                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
