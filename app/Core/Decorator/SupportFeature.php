<?php

namespace Core\Decorator;


class SupportFeature extends SubscriptionFeature
{

	public function price()
	{
		return $this->subscription->price() + 1;
	}

	public function description()
	{
		return $this->subscription->description() ." + Support";
	}
}