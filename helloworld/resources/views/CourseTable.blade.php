

@extends('layouts.app')

@section('title') CourseTable @stop

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> Course  Administration <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Date/Time Added</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($courses as $courses)
                <tr>
                    <td>{{ $GolfCourse->coursename }}
                    <td>{{ $GolfCourse->address }}</td>
                    <td>{{ $GolfCourse->phone }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="/CourseTable{{ $GolfCourse->$id }}/Courseedit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => '/CourseTable' . $courses->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="/CreateCourse" class="btn btn-success">Add Course</a>

</div>

@stop

