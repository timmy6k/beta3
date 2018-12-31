@extends('layouts.app')
{{--<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
@include('includes.ajaxapproval')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Material Status</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

							{!! Form::model($material,['method'=>'PATCH', 'action'=>['ApproveMaterialController@update', $material->id]]) !!}
							{{csrf_field()}}

                            <div class="form-group">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control', 'readonly'=>'true']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('material_type_id', 'Type:') !!}
                                {!! Form::select('material_type_id',[''=>'Select a type'] + $type, null, ['class'=>'form-control', 'readonly'=>'true']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('description', 'Description:') !!}
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'readonly'=>'true']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('status', 'Status:') !!}
                                {!! Form::select('status',[''=>'Select Status', '1'=>'Reject', '2'=>'Approve'], null, ['class'=>'form-control']) !!}
                            </div>

							<div class="form-group">
							    {!! Form::submit('Update Material Status', ['class'=>'btn btn-primary']) !!}
							</div>

							{!! Form::close() !!}

                            <div class="row">
                                @include('includes.form_error')
                            </div>




@endsection


