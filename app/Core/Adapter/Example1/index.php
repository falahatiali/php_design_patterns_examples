<?php
//***********************************************************
ini_set('display_errors', '1');
require __DIR__.'../../../../vendor/autoload.php';
//***************************************************************


$youtube = new \Core\Adapter\Example1\YouTubeAdapter(new \Core\Adapter\Example1\YouTube);

echo $youtube->getViews("vi-123-vio1pdkm3");
