<?php

namespace Core\Observer;

trait Subjectable
{
	protected $observers  = [];

	public function attach(Observer $observer)
	{
		$this->observers[] = $observer;
	}

	public function detach(Observer $observer)
	{
		foreach($this->observers as $key => $data) {
			if ($observer == $data){
				unset($this->observers[$key]);
			}
		}
		$this->observers = array_values($this->observers);
	}

	public function notify()
	{
		foreach($this->observers as $observer) {
			$observer->handle($this);
		}
	}
}