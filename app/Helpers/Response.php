<?php

namespace App\Helpers;

class Response{
	private $success;
	private $data;
	private $message;

	/**
	 * @param $success
	 */
	public function setSuccess($success){
		$this->success = $success;
	}

	/**
	 * @return boolean
	 */
	public function getSuccess(){
		return $this->success;
	}

	/**
	 * @param $data
	 */
	public function setData($data){
		$this->data = $data;
	}

	/**
	 * @return mixed
	 */
	public function getData(){
		return $this->data;
	}

	/**
	 * @param $message
	 */
	public function setMessage($message){
		$this->message = $message;
	}

	/**
	 * @return mixed
	 */
	public function getMessage(){
		return $this->message;
	}
}