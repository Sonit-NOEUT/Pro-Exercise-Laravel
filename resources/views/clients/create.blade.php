@extends('layouts.app-master')
@section('content')
<h1 class="mb-3">Add Client!</h1>
    <div class="container p-4 rounded bg-info" style="box-shadow: 0px 0px 5px white;">
        <div class="lead text-white mb-3">
            Add here
            <a href="{{ route('clients.index') }}" class="btn btn-danger btn-sm float-right px-3 py-2">Go Back</a>
        </div>
        <div>
            <form action="{{ route('clients.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Image:</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Store</button>
                </div>
            </form>
        </div>
    </div>
@endsection
