@extends('layouts.app-master')
@section('content')
    <h1 class="mb-3">Clients</h1>
    <div class=" container p-4" style="box-shadow: 0px 0px 5px white;background: #042331;">
        <div class="lead text-white mb-3">
            Manage your clients here!
            <a href="{{ route('clients.create') }}" class="btn btn-success btn-sm float-right px-3 py-2">Add</a>
        </div>
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="30%" class="text-center">Avatar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $key=>$item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td class="text-center"><img src="{{$item->getFirstMediaUrl('avatar', 'thumb')}}" / width="300px"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
