@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="text-center">                         
                            <img src="{{Storage::url($post->image)}}" class="rounded-circle border border-dark " style="object-fit:cover" alt="Random picture" width="200px" height="200px">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                        </div>
                            <div class="form-group">
                                <label for="">Caption</label>
                                <textarea class="form-control" name="caption" cols="30" rows="10">{{$post->caption}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-dark mt-2">
                                Update
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
