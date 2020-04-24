<?php

namespace Core\Decorator;

class BasicSubscription implements SubscriptionInterface
{

	public function price()
	{
		return 5;
	}

	public function description()
	{
		return "Basic subscription";
	}
}