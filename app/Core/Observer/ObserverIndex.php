<?php

namespace Core\Observer;

class ObserverIndex
{
	public static function main()
	{
		$event = new MailingListSignup(new User);
		$event->attach(new UpdateMailingStatusInDatabase);
		$event->attach(new SubscribeUserToService);

		$event->detach(new UpdateMailingStatusInDatabase);

		$event->notify();
	}
}