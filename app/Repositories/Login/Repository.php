<?php

namespace App\Repositories\Login;

use App\User;
use Illuminate\Support\Facades\Session;

class Repository{
	const LOGGED_IN = 'logged_in';

	public function loginUser(User $user)
	{
		$login = User::whereUsername($user->getAttribute('username'))
				->wherePassword($user->getAttribute('password'))
				->get();

		if(sizeof($login) < 1){
			throw new \Exception('User not found', 400);
		}

		Session::put('userId', $login[0]->id);

		return true;
	}
}