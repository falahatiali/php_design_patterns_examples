<?php

namespace Core\Adapter\Example1;

class YouTubeAdapter implements YouTubeAdapterInterface
{
	/**
	 * @var \Core\Adapter\Example1\YouTube
	 */
	private $youTube;

	public function __construct(YouTube $youTube)
	{
		$this->youTube = $youTube;
	}

	public function getViews($videoId)
	{
		return $this->youTube->getVideoViewCount($videoId);
	}
}