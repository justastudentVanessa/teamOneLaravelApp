<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	//this will be our controller for our admin to 

	public function __construct()
	{
	//$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
	//	$this->('auth');
	}

	/**
	 * Display a listing of the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		

		return View::make('UserTable', ['users' => $users]);
	}

	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('NewUser');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
           
                $user->name = Input::get('name');
                $user->username = Input::get('username');
                $user->phonenumber = Input::get('phonenumber');
                $user->address = Input::get('address');
                $user->email = Input::get('email');
                $user->password = Hash::make(Input::get('password'));



		$user->save();

		return Redirect::to('/user');
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('EditUser', [ 'user' => $user ]);
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);

		$user->name = Input::get('name');
		$user->username = Input::get('username');
		$user->phonenumber = Input::get('phonenumber');
		$user->address = Input::get('address');
		$user->email = Input::get('email');
		$user->password  = Hash::make(Input::get('password'));

		$user->save();

		return Redirect::to('/user');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::to('user');
	}
}
