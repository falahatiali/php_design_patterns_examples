<?php

namespace Core\Observer;

class Login implements Subject
{
	use Subjectable;

	public $user;

	public function __construct( $user)
	{
		$this->user = $user;
	}
}