<?php

namespace Core\AbstractFactory;


class ShapeFactory extends AbstractFactory
{
	public function getShape(string $shapeType): ShapeInterface
	{
		if(strtolower($shapeType) == 'rectangle'){
			return new Rectangle;
		}else if(strtolower($shapeType) == 'square'){
			return new Square;
		}
		return null;
	}
}