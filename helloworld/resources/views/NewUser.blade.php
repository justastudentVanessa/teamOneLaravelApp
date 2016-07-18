@extends('layouts.app')

@section('title') Create User @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif

    <h1><i class='fa fa-user-plus'></i> Add User</h1>

    {{ Form::open(['role' => 'form', 'url' => '/user']) }}

    <div class='form-group'>
        {{ Form::label('name','Name') }}
        {{ Form::text('name', null, ['placeholder' => 'Full Name', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
<div class='form-group'>
        {{ Form::label('phonenumber', 'Phone Number') }}
        {{ Form::text('phonenumber', null, ['placeholder' => 'Phone Number', 'class' => 'form-control']) }}
    </div>
	
    <div class='form-group'>
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', null, ['placeholder' => 'Address', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password_confirmation', 'Confirm Password') }}
        {{ Form::password('password_confirmation', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

</div>

@stop
