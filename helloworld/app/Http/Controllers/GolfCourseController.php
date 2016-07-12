<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use View;
use App\course;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class GolfCourseController  extends Controller
{
    //creates a golf course editor

public function __construct()
        {
//       $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        //      $this->('auth');
        }

        /**
         * Display a listing of the user.
         *
         * @return Response
         */
        public function index()
        {
                $Courses = course::all();


                return View::make('CourseTable', ['Golf Courses' => $Courses]);
        }

        /**
         * Show the form for creating a new user.
         *
         * @return Response
         */
        public function create()
        {
                return View::make('CreateCourse');
        }

        /**
         * Store a newly created user in storage.
         *
         * @return Response
         */
        public function store()
        {
                $GolfCourse = new GolfCourse;

                $GolfCourse->coursename  = Input::get('coursename');
                $GolfCourse->address   = Input::get('address');
                $GolfCourse->city      = Input::get('city');
                $GolfCourse->state      = Input::get('state');
                $GolfCourse->zip  = Input::get('zip');
                $GolfCourse->phone  = Input::get('username');



                $GolfCourse->save();

                return Redirect::to('/CourseTable');
        }

        /**
         * Show the form for editing the specified user.
         *
         * @param  int  $id
         * @return Response
         */

  public function edit($id)
        {
                $GolfCourse = GolfCourse::find($id);

                return View::make('EditCourse', [ 'GolfCourse' => $GolfCourse ]);
        }

        /**
         * Update the specified user in storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function update($id)
        {
                $GolfCourse = GolfCourse::find($id);
		 $GolfCourse->coursename  = Input::get('coursename');
                $GolfCourse->address   = Input::get('address');
                $GolfCourse->city      = Input::get('city');
                $GolfCourse->state      = Input::get('state');
                $GolfCourse->zip  = Input::get('zip');
                $GolfCourse->phone  = Input::get('username');

		 $GolfCourse->save();

                return Redirect::to('/GolfCourses');
        }

        /**
         * Remove the specified user from storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function destroy($id)
        {
                GolfCourse::destroy($id);

                return Redirect::to('GolfCourses');
        }








}
