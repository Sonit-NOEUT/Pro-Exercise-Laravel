@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">Update post</h1>
    <div class="bg-secondary p-4 rounded text-dark" style="box-shadow: 0px 0px 15px rgb(8, 8, 8)">
        <div class="lead">
            Edit post.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('posts.update', $post->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ $post->title }}"
                        type="text"
                        class="form-control text-white"
                        name="title"
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left bg-dark">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ $post->description }}"
                        type="text"
                        class="form-control text-white"
                        name="description"
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left bg-dark">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea
                        type="text"
                        class="form-control text-white"
                        name="body"
                        placeholder="Body" required>{{ $post->body }}</textarea>

                    @if ($errors->has('body'))
                        <span class="text-danger text-left bg-dark">{{ $errors->first('body') }}</span>
                    @endif
                </div>


                <button type="submit" class="btn btn-success">Save changes</button>
                <a href="{{ route('posts.index') }}" class="btn btn-dark">Back</a>
            </form>
        </div>

    </div>
@endsection
