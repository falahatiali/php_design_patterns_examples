<?php

namespace Core\Factory;

abstract class Uploader
{
	abstract public function factoryMethod(): UploadAdapterInterface;

	public function upload($file , $destination)
	{
		$factory = $this->factoryMethod();
		$result = $factory->upload($file , $destination);
		return $result;
	}
}