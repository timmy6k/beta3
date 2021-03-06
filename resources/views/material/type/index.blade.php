@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View Material Types</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>




                        @endif
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created By</th>
                                    <th>When Created</th>
                                </tr>
                                </thead>
                                <tbody>
							@foreach($type as $types)
                                <tr>
                                    <td>{{$types->id}}</td>
                                    <td>{{$types->name}}</td>
                                    <td>{{$types->createdby->name}}</td>
                                    <td>{{$types->created_at->diffForHumans()}}</td>
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






