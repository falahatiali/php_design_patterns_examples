<?php

namespace Core\Adapter\Example2;

interface PaymentAdapter
{
	public function createPayment($amount);

	public function verifyTransaction($id , $amount);

	public function rollbackTransaction($id , $amount);
}