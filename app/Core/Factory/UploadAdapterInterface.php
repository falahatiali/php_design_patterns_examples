<?php

namespace Core\Factory;

interface UploadAdapterInterface
{
	public function upload($file , $destination);
}