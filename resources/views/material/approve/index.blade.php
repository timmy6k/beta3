@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Material Status</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($material)
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
                                @foreach($material as $materials)
                                    <tr>
                                        <td>{{$materials->id}}</td>
                                        <td><a href="{{route('approve.edit', $materials->id)}}">{{$materials->name}}</a></td>
                                        <td>{{$materials->createdby->name}}</td>
                                        <td>{{$materials->created_at->diffForHumans()}}</td>
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







