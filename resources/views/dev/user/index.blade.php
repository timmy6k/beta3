@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dev Users</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <table class="table table-striped" >
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">User Role</th>
                                <th scope="col">Material Role</th>
                                <th scope="col">Inventory Role</th>
                                <th scope="col">MPR Role</th>
                                <th scope="col">BPR Role</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Created At</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $users)

                                <tr>
                                    <th scope="row">{{$users->id}}</th>
                                    <td><a href="{{route('dev.user.edit', $users->id)}}">{{$users->name}}</a></td>
                                    <td>{{$users->email}}</td>
                                    <td>{{$users->is_active}}</td>
                                    <td>{{$users->user_role == 2 ? 'Dev' : $users->userrole->name}}</td>
                                    <td>{{$users->materialrole->name}}</td>
                                    <td>{{$users->inventoryrole->name}}</td>
                                    <td>{{$users->mprrole->name}}</td>
                                    <td>{{$users->bprrole->name}}</td>
                                    <td>{{$users->createdby->name}}</td>
                                    <td>{{$users->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
