@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">Show Post</h1>

    <div class="bg-secondary p-4 rounded text-dark" style="box-shadow: 0px 0px 15px rgb(8, 8, 8)">
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
        <div class="mt-4">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-danger">Edit</a>
            <a href="{{ route('posts.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>

@endsection
