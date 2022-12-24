@extends('layouts.app-master')
@section('content')
<h1 class="mb-3">Add Client!</h1>
    <div class="bg-secondary p-4 rounded text-dark" style="box-shadow: 0px 0px 15px rgb(8, 8, 8)">
        <div class="lead mb-3">
            Add client here!
            <a href="{{ route('clients.index') }}" class="btn btn-danger btn-sm float-right px-3 py-2">Go Back</a>
        </div>
        <div>
            <form action="{{ route('clients.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control text-white" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control text-white" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label>Image:</label>
                    <input type="file" name="avatar" class="form-control" placeholder="Image">
                </div>
                <div class="d-grid">
                    <button class="btn btn-success w-100 p-3">Store</button>
                </div>
            </form>
        </div>
    </div>
@endsection
