<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Input;
use App\User;

class RegisterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('auth/register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'first_name' => 'required|min:3|max:20',
			'last_name' => 'required|min:3|max:20',
			'username' => 'required|min:3|max:20|unique:users',
			'email' => 'required|min:5|max:100|email',
			'password' => 'confirmed|required|min:6|max:60',
			'password_confirmation' => 'required',
		]);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$user = User::create([
			'first_name' => Input::get('first_name'),
			'last_name' => Input::get('last_name'),
			'username' => Input::get('username'),
			'email' => Input::get('email'),
			'password' => bcrypt(Input::get('password')),
		]);

		return Redirect::route('home_path');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
