<?php

namespace Core\Factory\Example2;


class ShapeFactory
{
	public function getShape(string $shapeType)
	{
		if($shapeType == null){
			return null;
		}
		if(strtolower("CIRCLE")){
			return new Circle;

		} else if(strtolower("RECTANGLE")){
			return new Rectangle;

		} else if(strtolower("SQUARE")){
			return new Square;
		}

		return null;
	}
}