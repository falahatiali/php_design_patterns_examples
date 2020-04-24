<?php
ini_set('display_errors', '1');
require __DIR__.'../../../vendor/autoload.php';
//***************************************************************


$facade = new \Core\Facade\RegisterFacade(new \Core\Facade\ValidateData, new \Core\Facade\User, new \Core\Facade\Email);
$facade->registerUser(['email' => 'ali.falahati.2010@gmail.com' , 'name'=> 'Ali Falahati', 'password' => '123321']);