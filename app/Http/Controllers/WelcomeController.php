<?php namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(),[
			'Thought_content' => 'required|max:272|min:3'
		]);

		if($validator->fails()){
			return Redirect::back()->withErrors($validator);
		}

		return 'success!';
	}

}
