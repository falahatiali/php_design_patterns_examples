<?php

namespace Core\Factory;

class FTPAdapter implements UploadAdapterInterface
{
	public function upload($file, $destination)
	{
		return "Uploaded in FTP. File {$file} , Destination {$destination}";
	}
}