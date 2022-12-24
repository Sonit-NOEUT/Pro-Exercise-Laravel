@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">Post</h1>

    <div class="bg-secondary p-4 rounded text-dark" style="box-shadow: 0px 0px 15px rgb(8, 8, 8)">
        <div class="lead mb-3">
            Manage your posts here.
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm float-right p-2">Add post</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered text-dark" border="1">
          <tr>
             <th width="1%"><strong>No</strong></th>
             <th><strong>Name</strong></th>
             <th width="3%" colspan="3" class="text-center"><strong>Action</strong></th>
          </tr>
            @foreach ($posts as $key => $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show', $post->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $posts->links() !!}
        </div>

    </div>
@endsection
