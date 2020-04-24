<?php

namespace Core\Facade;

class ValidateData
{
	public function valiateion($data)
	{
		if (count($data) >= 1 && array_key_exists('email', $data)){
			return true;
		}

		return false;
	}
}