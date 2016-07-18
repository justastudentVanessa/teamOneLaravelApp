@extends ('layouts.app')

@section('title') Create Course  @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif

    <h1><i class='fa fa-user-plus'></i> Add Course</h1>

    {{ Form::open(['role' => 'form', 'url' => '/CourseTable']) }}

    <div class='form-group'>
        {{ Form::label('coursename','Course Name') }}
        {{ Form::text('coursename', null, ['placeholder' => 'Course Name', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('address', 'Street Address') }}
        {{ Form::text('address', null, ['placeholder' => 'Street Address', 'class' => 'form-control']) }}
    </div>
<div class='form-group'>
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', null, ['placeholder' => 'City', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', null, ['placeholder' => 'State', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('zip', 'Zip Code') }}
        {{ Form::text('zip', null, ['placeholder' => 'Zip Code', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('phone', 'Phone Number') }}
        {{ Form::text('phone', ['placeholder' => 'Phone Number', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

</div>

@stop
