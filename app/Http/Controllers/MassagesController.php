<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Message;
use App\User;

class MassagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function indexAction()
	{
		$identity = 2;

		$messages = Message::with('user')
			->where('user_id', '=', $identity)
			->get();

		$users = [];

		foreach($messages as $message) {
			$user = User::find($message->sender_id);
			$users[] = $user;
		}

		return view('pages.messages')->with(
			[
				'messages' => $messages,
				'users' => $users,
				'page' => 'Messages'
			]
		);
	}
}
