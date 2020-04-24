<?php

namespace Core\Facade;

class User
{
	public function register($data)
	{
		$email =  $data['email']??'';
		echo "New user with email {$email} registered successfully. ";
		return $this;
	}
}