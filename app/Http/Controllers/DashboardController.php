<?php namespace App\Http\Controllers;

class DashboardController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function indexAction()
	{
		return view('pages.dashboard')->with('page', 'Dashboard');
	}
}
