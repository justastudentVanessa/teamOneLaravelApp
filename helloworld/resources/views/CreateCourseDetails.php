@extends ('layouts.app')

@section('title') Create Course Details @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif

    <h1><i class='fa fa-user'></i> Add Course Details</h1>

    {{ Form::open(['role' => 'form', 'url' => '/CourseDetails']) }}

    <div class='form-group'>
        {{ Form::label('teecolor','Tee Color') }}
        {{ Form::text('teecolor', null, ['placeholder' => 'Tee Color', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('yardage', 'Yardage') }}
        {{ Form::text('yardage', null, ['placeholder' => 'Yardage', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('handicap', 'Handicap') }}
        {{ Form::text('handicap', null, ['placeholder' => 'Handicap', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('par', 'Par') }}
        {{ Form::text('par', null, ['placeholder' => 'Par', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

</div>

@stop
