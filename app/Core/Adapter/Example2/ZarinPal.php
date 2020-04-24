<?php

namespace Core\Adapter\Example2;

class ZarinPal
{
	public function create($amount)
	{
		return "Payment with amount {$amount} by Zarinpal created successfully <br>";
	}

	public function verify($id, $amount)
	{
		return "Congratulation, Payment with id {$id} by Zarinpal verified.<br>";
	}

	public function cancel($id, $amount)
	{
		return "oh sorry, Payment with id {$id} by Zarinpal was not successful. we had to rollback it.<br>";
	}
}