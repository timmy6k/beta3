@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dev Create User</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=>'DevUserController@store']) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('is_active', 'Status:') !!}
                            {!! Form::select('is_active', [0=>'Inactive', 1=>'Active'], null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('user_role', 'User Role:') !!}
                            {!! Form::select('user_role',  $user_role, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('material_role', 'Material Role:') !!}
                            {!! Form::select('material_role',  $table_role, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('inventory_role', 'Inventory Role:') !!}
                            {!! Form::select('inventory_role',  $table_role, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('mpr_role', 'MPR Role:') !!}
                            {!! Form::select('mpr_role',  $table_role, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('bpr_role', 'BPR Role:') !!}
                            {!! Form::select('bpr_role',  $table_role, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create User', ['class'=>'btn btm-primary']) !!}
                        </div>
                        {!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
