<?php

namespace Core\AbstractFactory;

class RoundedRectangle implements ShapeInterface
{
	public function draw(): void
	{
		echo "Inside RoundedRectangle::draw() method.";
	}
}