<?php

$shapeFactory = new \Core\Factory\Example2\ShapeFactory;

$shape1 = $shapeFactory->getShape("Circle");
$shape1->draw();


$shape2 = $shapeFactory->getShape("Rectangle");
$shape2->draw();


$shape3 = $shapeFactory->getShape("Square");
$shape3->draw();