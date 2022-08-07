@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow border border-dark">
                    <div class="card-header">My Posts</div>

                    <div class="card-body">
                        <table class="table table-strpied table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Caption
                                    </th>
                                    <th>
                                        Poster
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            {{ $post->id }}
                                        </td>
                                        <td>
                                            {{ Str::limit($post->caption,100) }}
                                        </td>
                                        <td>
                                            <img src="{{ Storage::url($post->image) }}" class=" rounded-top" height="150px"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="btn-group gap-1">
                                                <a class="btn btn-dark btn-sm" href="{{route('posts.edit',$post->id)}}">Edit</a>
                                                <a class="btn btn-dark btn-sm" href="{{route('posts.show',$post->id)}}">View</a>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"  class="btn btn-dark btn-sm"
                                                        href="">Delete</button>
                                                </form>


                                            </div>
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
