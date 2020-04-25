<?php

namespace Core\Observer;


class MailingListSignup implements Subject
{
	use Subjectable;

	public   $user;

	public function __construct($user)
	{
		$this->user = $user;
	}
}