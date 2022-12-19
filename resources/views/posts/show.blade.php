@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">Show Post</h1>

    <div class="p-4 rounded text-white" style="box-shadow: 0px 0px 10px grey;background: #042331">
        <div class="container mt-2">
            <div class="lh-base">
                Title: {{ $post->title }}
            </div>
            <div class="lh-base">
                Description: {{ $post->description }}
            </div>
            <div class="lh-base">
                Body: {{ $post->body }}
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('posts.index') }}" class="btn btn-light">Back</a>
    </div>
@endsection
