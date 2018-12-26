@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Users</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($user)
                            <table class="table">
                              <thead>
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

                                </tr>
                              </thead>
                              <tbody>
                                @foreach($user as $users)

                                <tr>
                                  <th scope="row">{{$users->id}}</th>
                                  <td>{{$users->name}}</td>
                                  <td>{{$users->email}}</td>
                                  <td>{{$users->is_active}}</td>
                                  <td>{{$users->user_role == 2 ? 'Dev' : $users->userrole->name}}</td>
                                  <td>{{$users->materialrole->name}}</td>
                                  <td>{{$users->inventoryrole->name}}</td>
                                  <td>{{$users->mprrole->name}}</td>
                                  <td>{{$users->bprrole->name}}</td>
                                </tr>
                                 @endforeach
                              </tbody>
                            </table>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
