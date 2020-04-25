<?php

namespace Core\AbstractFactory;

class RoundedSquare implements ShapeInterface
{

	public function draw(): void
	{
		echo "Inside RoundedSquare::draw() method.";
	}
}