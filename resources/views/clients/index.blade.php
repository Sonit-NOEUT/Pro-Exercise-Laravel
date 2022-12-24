@extends('layouts.app-master')
@section('content')
    <h1 class="mb-3">Clients</h1>
    <div class="bg-secondary p-4 rounded text-dark" style="box-shadow: 0px 0px 15px rgb(8, 8, 8)">
        <div class="lead mb-3">
            Manage your clients here!
            <a href="{{ route('clients.create') }}" class="btn btn-success btn-sm float-right px-3 py-2">Add</a>
        </div>
        <table class="table table-bordered text-dark" border="1">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th width="30%" class="text-center">Avatar</th>
            </tr>
            @foreach($clients as $key=>$item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td class="text-center"><img src="{{$item->getFirstMediaUrl('avatar', 'thumb')}}" class="w-25 h-25"></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
