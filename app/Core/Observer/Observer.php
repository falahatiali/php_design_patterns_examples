<?php

namespace Core\Observer;

interface Observer
{
	public function handle($event);
}