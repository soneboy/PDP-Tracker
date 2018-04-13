<?php

namespace App\Repositories\Login;

use App\Helpers\Response;
use App\User;

class Service{

	private $repository;

	public function __construct(Repository $repository)
	{
		$this->repository = $repository;
	}

	public function loginUser(User $user)
	{
		$response = new Response();

		try{

			$success = $this->repository->loginUser($user);
			$response->setSuccess($success);
		} catch(\Exception $e){

			$response->setMessage($e->getMessage());
			$response->setSuccess(false);
		}

		return $response;
	}
}