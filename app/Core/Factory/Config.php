<?php

namespace Core\Factory;


class Config
{
	static private $data = [
		'upload' => [
			'default' 	=> 's3' ,
			'services'	=> [
				's3'    => [
					'type'		=> '\Core\Factory\S3Adapter',
					'key'		=> '123' ,
					'secret'	=> '456' ,
				],
				'ftp'	=> [
					'type'		=> '\Core\Factory\FTPAdapter',
					'host'	=> 'abc'
				],
			],
		],
	];

	public static function className($key)
	{
		return self::$data["upload"]["services"][$key]["type"];
	}

	public static function get($keys)
	{
		$data = self::$data;
		$keys = explode("." , $keys);

		foreach($keys as $key) {
			if (array_key_exists($key , $data)){
				$data = $data[$key];
				continue;
			}
		}

		return $data;
	}
}