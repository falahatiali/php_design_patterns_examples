<?php

namespace Core\AbstractFactory;

class FactoryProducer
{
	public static function getFactory(bool $rounded)
	{
		if ($rounded){
			return new RoundedShapeFactory;
		}

		return new ShapeFactory;

	}
}