<?php
//***********************************************************
ini_set('display_errors', '1');
require __DIR__.'/vendor/autoload.php';
//***************************************************************

/**
	START	************************* DECORATOR EXAMPLE ******************************
 */

$subscription = new \Core\Decorator\SupportFeature(new \Core\Decorator\AdditionalSpaceFeature(new \Core\Decorator\BasicSubscription));
echo ($subscription->description());

/**
    END 	************************* DECORATOR EXAMPLE ******************************
 */

