<?php

namespace Core\AbstractFactory;


abstract class AbstractFactory
{
	abstract public function getShape(string $shapeType):ShapeInterface;
}