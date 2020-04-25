<?php

namespace Core\Observer;

class UpdateMailingStatusInDatabase implements Observer
{

	public function handle($event)
	{
		var_dump("Update main in database, User id is {$event->user->id} and Email = {$event->user->email}");
	}
}