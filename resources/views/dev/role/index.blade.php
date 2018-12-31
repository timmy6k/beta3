@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View Roles</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        @if($role)
                                <table class="table table-striped table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created By</th>
                                        <th>Updated By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                            @foreach($role as $roles)
                                    <tr>
                                        <td>{{$roles->id}}</td>
                                        <td>
                                            @if($roles->name == 'waffle')
                                                Dev
                                            @else
                                                <a href="{{route('role.edit', $roles->id)}}">{{$roles->name}}</a>
                                            @endif
                                        </td>
                                        <td>{{$roles->createdby->name}}</td>
                                        <td>{{$roles->updatedby ? $roles->updatedby->name : 'None'}}</td>
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
