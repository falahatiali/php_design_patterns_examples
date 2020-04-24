<?php

namespace Core\Facade;

class RegisterFacade
{
	/**
	 * @var \Core\Facade\ValidateData
	 */
	protected $validation;
	/**
	 * @var \Core\Facade\User
	 */
	protected $user;
	/**
	 * @var \Core\Facade\Email
	 */
	protected $email;

	public function __construct(ValidateData $validation , User $user , Email $email)
	{
		$this->validation = $validation;
		$this->user = $user;
		$this->email = $email;
	}

	public function registerUser(array $data){
		if ($this->validation->valiateion($data)){
			$user = $this->user->register($data);
			$email = $this->email->sendEmail($data);

			echo "<br>" . "done";
		}else{
			echo "Validation failed";
		}
	}
}