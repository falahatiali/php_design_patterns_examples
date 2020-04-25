<?php

namespace Core\AbstractFactory;

class RoundedShapeFactory extends AbstractFactory
{
	public function getShape(string $shapeType): ShapeInterface
	{
		if(strtolower($shapeType) == 'rectangle'){
			return new RoundedRectangle;
		}else if(strtolower($shapeType) == 'square'){
			return new RoundedSquare;
		}
		return null;
	}
}