<?php

namespace Core\AbstractFactory;

class Square implements ShapeInterface
{
	public function draw()
	{
		echo "Inside Square::draw() method.";
	}
}