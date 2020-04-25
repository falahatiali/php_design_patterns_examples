<?php

namespace Core\Observer\Spl;

use SplSubject;

class UpdateMailingStatusInDatabase implements \SplObserver
{

	/**
	 * Receive update from subject
	 * @link  http://php.net/manual/en/splobserver.update.php
	 * @param SplSubject $subject <p>
	 *                            The <b>SplSubject</b> notifying the observer of an update.
	 *                            </p>
	 * @return void
	 * @since 5.1.0
	 */
	public function update(SplSubject $subject)
	{
		var_dump("Update user in db.");
	}
}