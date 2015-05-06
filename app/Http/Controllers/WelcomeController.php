<?php namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use App\Post;
use Auth;
use App\User;

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
		if (Auth::check()){

		$user = User::with('profile')->with(['posts' => function($sql){
			$sql->orderBy('created_at', 'desc');
		}])->where('username', Auth::user()->username)->first();
		return view('dashboard')->with('user', $user);

		} else {
			return view('dashboard');
		}
		
	}

	public function store()
	{
		$validator = Validator::make(Input::all(),[
			'Thought_content' => 'required|max:272|min:3'
		]);

		if($validator->fails()){
			return Redirect::back()->withErrors($validator);
		}

		$post = new Post([
			'content' => Input::get('Thought_content'),
		]);

		$user = Auth::user();

		$user->posts()->save($post);

		return Redirect::back();
	}

}
