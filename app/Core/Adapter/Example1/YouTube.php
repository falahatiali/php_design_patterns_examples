<?php

namespace Core\Adapter\Example1;

class YouTube
{
	public function getVideoViewCount($videoId){
		return "View count for {$videoId} is " . 5000;
	}
}