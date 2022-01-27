@extends('layouts.admin.admin')
@section('content')
<div class="container">
    <div class="row mt-4">
        <h2>Users</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">username</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">address</th>
                    <th scope="col">phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                   
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        <a href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i></a>
                        
                        </a>
                        @endforeach
                    </td>   
                   
                   
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection