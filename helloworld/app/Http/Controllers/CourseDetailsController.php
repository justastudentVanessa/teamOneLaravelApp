<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use View;
use App\CourseDetails;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class CourseDetailsController extends Controller
{
    //Creates a glf course deatials editor

    public function __construct()

    public function index()
    {
	$details = CourseDetails::all();

	return View::make('CourseDetails', ['CourseDetails' => $details])
    }

    public function create()
    {
	return View::make('CreateCourseDetails');
    }

    public function store()
    {
	$details = new CourseDetails;

	$details->teecolor = Input::get('teecolor');
	$details->yardage = Input::get('yardage');
	$details->handicap = Input::get('handicap');
	$details->par = Input::get('par');

	$details->save();

	return Redirect::to('/CourseDetails');
    }

    public function edit($id)
    {
	$details = CourseDetails::find($id);

	return View::make('CourseDetails', ['CourseDetails' => $details]);
    }

    public function update($id)
    {
	$details = CourseDetails::find($id);

	$details->teecolor = Input::get('teecolor');
	$details->yardage = Input::get('yardage');
	$details->handicap = Input::get('handicap');	
	$details->par = Input::get('par');

	$details->save();

	return Redirect::to('/CourseDetails');
    }

    public function destroy($id)
    {
	CourseDetails($id);

	return Redirect::to('/CourseDetails');
    }
}
