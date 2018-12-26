@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Roles</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Table Name</th>
                                  <th scope="col">Role Name</th>
                                  <th scope="col">Role ID</th>

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                 <th scope="row">User</th>
                                 <td>{{Auth::user()->user_role == 2 ? 'Dev' : Auth::user()->userrole->name}}</td>
                                 <td>{{Auth::user()->user_role}}</td>
                                </tr>

                                <tr>
                                  <th scope="row">Material</th>
                                  <td>{{Auth::user()->materialrole->name}}</td>
                                  <td>{{Auth::user()->material_role}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Inventory</th>
                                    <td>{{Auth::user()->inventoryrole->name}}</td>
                                    <td>{{Auth::user()->inventory_role}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">MPR</th>
                                    <td>{{Auth::user()->mprrole->name}}</td>
                                    <td>{{Auth::user()->mpr_role}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">BPR</th>
                                    <td>{{Auth::user()->bprrole->name}}</td>
                                    <td>{{Auth::user()->bpr_role}}</td>
                                </tr>

                              </tbody>
                            </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
