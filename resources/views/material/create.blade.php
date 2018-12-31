@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Material</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=>'MaterialController@store']) !!}

                        {{csrf_field()}}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('material_type_id', 'Type:') !!}
                            {!! Form::select('material_type_id',[''=>'Select a type'] + $type, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create Material', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}

                        <div class="row">
                            @include('includes.form_error')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
