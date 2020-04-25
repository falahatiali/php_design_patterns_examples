<?php

namespace Core\Observer;

class SubscribeUserToService implements Observer
{

	public function handle($event)
	{
		var_dump( "Subscribe user to Mainchimp, User Email is = ". $event->user->email);
	}
}