<?php namespace App\Http\Controllers;

use App\Http\Requests;

class SignUpController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function indexAction()
	{
		return view('signUp');
	}
}