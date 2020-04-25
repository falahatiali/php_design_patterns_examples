<?php
//***********************************************************
ini_set('display_errors', '1');
require __DIR__.'/vendor/autoload.php';
//***************************************************************

/**
START	************************* Abstract Factory EXAMPLE 1 ******************************
 */
\Core\Observer\ObserverIndex::main();
exit;
/**
END 	************************* Abstract Factory EXAMPLE 1 ******************************
 */



/**
START	************************* Abstract Factory EXAMPLE 1 ******************************
 */
\Core\AbstractFactory\AbstractFactoryIndex::main();
exit;
/**
END 	************************* Abstract Factory EXAMPLE 1 ******************************
 */





/**
START	************************* Adapter EXAMPLE 1 ******************************
 */
$youtube = new \Core\Adapter\Example1\YouTubeAdapter(new \Core\Adapter\Example1\YouTube);
echo $youtube->getViews("vi-123-vio1pdkm3");
/**
END 	************************* Adapter EXAMPLE 1 ******************************
 */


/**
START	************************* FACADE EXAMPLE ******************************
 */
$facade = new \Core\Facade\RegisterFacade(new \Core\Facade\ValidateData, new \Core\Facade\User, new \Core\Facade\Email);
$facade->registerUser(['email' => 'ali.falahati.2010@gmail.com' , 'name'=> 'Ali Falahati', 'password' => '123321']);
/**
END 	************************* FACADE EXAMPLE ******************************
 */

/**
	START	************************* DECORATOR EXAMPLE ******************************
 */
$subscription = new \Core\Decorator\SupportFeature(new \Core\Decorator\AdditionalSpaceFeature(new \Core\Decorator\BasicSubscription));
echo ($subscription->description());
/**
    END 	************************* DECORATOR EXAMPLE ******************************
 */
