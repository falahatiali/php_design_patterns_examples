<?php

namespace Core\Factory\Example2;

class Square implements Shape
{
	public function draw()
	{
		echo "Inside Square::draw() method.";
	}
}