<?php

namespace Core\Facade;

class Email
{
	public function sendEmail(array $user)
	{
		return "Email sent successfully to user {$user['email']}";
	}
}