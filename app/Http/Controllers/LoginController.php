<?php namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\User;
use App\Repositories\Login\Service;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return view
	 */
	public function indexAction()
	{
		return view('login')->with('user', new User);
	}

	public function submitAction(Service $loginService, User $user, LoginRequest $loginRequest)
	{
		try{
			$requestData = $loginRequest->except('_token');
			$populatedUserModel = $user->fill($requestData);
			$loginService = $loginService->loginUser($populatedUserModel);

			if(!$loginService->getSuccess()){
				throw new \Exception($loginService->getMessage());
			}

			return redirect()->action('DashboardController@indexAction');

		}catch(\Exception $e){

			return Redirect::back()->withErrors($e->getMessage());
		}
	}
}