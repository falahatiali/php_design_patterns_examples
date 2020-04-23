<?php

ini_set('display_errors', '1');
require __DIR__.'../../../vendor/autoload.php';
//***************************************************************

function doUpdate(\Core\Factory\Uploader $uploader){
	return $uploader->upload("file.txt"  , "destination.txt");
}

$result = doUpdate(new \Core\Factory\CreateUploaderInstanceAdapter('ftp'));