<?php
/**
 * Created by PhpStorm.
 * User: fali
 * Date: 4/24/20
 * Time: 10:34 PM
 */

namespace Core\Adapter\Example2;


class PayPal
{

	public function newPayment($amount)
	{
		return "Payment with amount {$amount} by PayPal created successfully <br>";
	}

	public function accept($id)
	{
		return "Congratulation, Payment with id {$id} by PayPal verified.<br>";
	}

	public function rollback($id)
	{
		return "oh sorry, Payment with id {$id} by PayPal was not successful. we had to rollback it.<br>";
	}
}