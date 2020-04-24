<?php

namespace Core\Decorator;

abstract class SubscriptionFeature implements SubscriptionInterface
{
	/**
	 * @var \Core\Decorator\SubscriptionInterface
	 */
	protected $subscription;

	public function __construct(SubscriptionInterface $subscription)
	{

		$this->subscription = $subscription;
	}

	abstract public function price();

	abstract public function description();
}