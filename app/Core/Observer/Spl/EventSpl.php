<?php

namespace Core\Observer\Spl;

use SplObserver;

abstract class EventSpl implements \SplSubject
{
	/**
	 * @var \SplObjectStorage
	 */
	protected $storage;

	public function __construct(\SplObjectStorage $storage)
	{
		$this->storage = $storage;
	}

	public function attach(SplObserver $observer)
	{
		$this->storage->attach($observer);
	}

	public function detach(SplObserver $observer)
	{
		if ($this->storage->contains($observer)){
			return;
		}

		$this->storage->detach($observer);
	}

	public function notify()
	{
		if (!count($this->storage)){
			return;
		}

		foreach($this->storage as $observer) {
			$observer->update($this);
		}
	}
}