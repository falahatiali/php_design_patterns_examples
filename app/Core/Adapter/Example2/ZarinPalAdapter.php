<?php

namespace Core\Adapter\Example2;

class ZarinPalAdapter implements PaymentAdapter
{
	/**
	 * @var \Core\Adapter\Example2\ZarinPal
	 */
	private $zarinPal;

	public function __construct(ZarinPal $zarinPal)
	{
		$this->zarinPal = $zarinPal;
	}

	public function createPayment($amount)
	{
		echo $this->zarinPal->create($amount);
		return uniqid();
	}

	public function verifyTransaction($id, $amount)
	{
		echo $this->zarinPal->verify($id , $amount);
	}

	public function rollbackTransaction($id, $amount)
	{
		echo $this->zarinPal->cancel($id, $amount);
	}
}