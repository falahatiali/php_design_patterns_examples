<?php

namespace Core\Factory\Example2;

class Rectangle implements Shape
{
	public function draw()
	{
		echo "Inside Rectangle::draw() method.";
	}
}