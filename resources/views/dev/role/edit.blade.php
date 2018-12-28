@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Role</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

							{!! Form::model($role,['method'=>'PATCH', 'action'=>['DevRoleController@update', $role->id]]) !!}
							{{csrf_field()}}

							<div class="form-group">
							    {!! Form::label('name', 'Name:') !!}
							    {!! Form::text('name', null, ['class'=>'form-control']) !!}
							</div>

							<div class="form-group">
							    {!! Form::submit('Update Role', ['class'=>'btn btn-primary']) !!}
							</div>

							{!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
