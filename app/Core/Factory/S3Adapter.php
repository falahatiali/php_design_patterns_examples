<?php

namespace Core\Factory;

class S3Adapter implements UploadAdapterInterface
{
	public function upload($file, $destination)
	{
		return "Uploaded in S3. File {$file} , Destination {$destination}";
	}
}