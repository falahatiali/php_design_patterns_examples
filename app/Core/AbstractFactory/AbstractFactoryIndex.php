<?php

namespace Core\AbstractFactory;


class AbstractFactoryIndex
{
	public static function main()
	{
		$shapeFactory = FactoryProducer::getFactory(false);
		$shapeRoundedFactory = FactoryProducer::getFactory(true);


		$shape1 = $shapeFactory->getShape("rectangle");
		$shape1->draw();
		echo "<hr>";

		$shape2 = $shapeFactory->getShape("square");
		$shape2->draw();

		echo "<hr>";
		$shape3 = $shapeRoundedFactory->getShape("rectangle");
		$shape3->draw();

		echo "<hr>";
		$shape4 = $shapeRoundedFactory->getShape("square");
		$shape4->draw();

	}
}