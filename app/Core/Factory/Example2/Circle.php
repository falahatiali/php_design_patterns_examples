<?php

namespace Core\Factory\Example2;

class Circle implements Shape
{
	public function draw()
	{
		echo "Inside Circle::draw() method.";
	}
}