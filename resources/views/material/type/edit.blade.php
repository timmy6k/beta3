@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Material Type</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

							{!! Form::model($type,['method'=>'PATCH', 'action'=>['MaterialTypeController@update', $type->id]]) !!}
							{{csrf_field()}}

							<div class="form-group">
							    {!! Form::label('name', 'Name:') !!}
							    {!! Form::text('name', null, ['class'=>'form-control']) !!}
							</div>

							<div class="form-group">
							    {!! Form::submit('Update Material Type', ['class'=>'btn btn-primary']) !!}
							</div>

							{!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
