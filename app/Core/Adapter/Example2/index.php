<?php
ini_set('display_errors', '1');
require __DIR__.'../../../../vendor/autoload.php';
//****************************************************

$zarinpal = new \Core\Adapter\Example2\ZarinPalAdapter(new \Core\Adapter\Example2\ZarinPal);
$res = $zarinpal->createPayment(1000);
if ($res){
	$zarinpal->createPayment(1000);
}else{
	$zarinpal->rollbackTransaction(123 , 1000);
}
