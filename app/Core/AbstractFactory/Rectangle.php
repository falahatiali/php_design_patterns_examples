<?php

namespace Core\AbstractFactory;

class Rectangle implements ShapeInterface
{
	public function draw(): void
	{
		echo "Inside Rectangle::draw() method.";
	}
}