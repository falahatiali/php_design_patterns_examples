<?php

ini_set('display_errors', '1');
require __DIR__.'../../../vendor/autoload.php';
//****************************************************

$subscription = new \Core\Decorator\AdditionalSpaceFeature(new \Core\Decorator\BasicSubscription());

var_dump($subscription->price());
