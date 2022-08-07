@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <img src="{{ Storage::url($post->image) }}" class="rounded-circle border border-dark " style="object-fit:cover"
                alt="Random picture" width="200px" height="200px">
        </div>
        <p>
            {{ $post->caption }}
        </p>
    </div>
@endsection
