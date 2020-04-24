<?php

namespace Core\Adapter\Example2;

class PayPalAdapter implements PaymentAdapter
{
	/**
	 * @var \Core\Adapter\Example2\PayPal
	 */
	private $payPal;

	public function __construct(PayPal $payPal)
	{
		$this->payPal = $payPal;
	}

	public function createPayment($amount)
	{
		echo $this->payPal->newPayment($amount);
	}

	public function verifyTransaction($id, $amount)
	{
		echo $this->payPal->accept($id) . " Amount was = {$amount}";
	}

	public function rollbackTransaction($id, $amount)
	{
		echo $this->payPal->rollback($id) . " Amount was = {$amount}";
	}
}