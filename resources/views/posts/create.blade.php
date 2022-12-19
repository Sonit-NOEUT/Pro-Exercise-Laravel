@extends('layouts.app-master')

@section('content')
    <h1 class="mb-3">Add new post</h1>
    <div class="bg-info p-4 rounded" style="box-shadow: 0px 0px 5px grey">
        <div class="lead">
            Add new post.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title') }}"
                        type="text"
                        class="form-control text-white"
                        name="title"
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}"
                        type="text"
                        class="form-control text-white"
                        name="description"
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control text-white"
                        name="body"
                        placeholder="Body" required>{{ old('body') }}</textarea>

                    @if ($errors->has('body'))
                        <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                    @endif
                </div>


                <button type="submit" class="btn btn-success">Save role</button>
                <a href="{{ route('posts.index') }}" class="btn btn-light">Back</a>
            </form>
        </div>

    </div>
@endsection
