<?php
/**
 * Created by PhpStorm.
 * User: fali
 * Date: 4/23/20
 * Time: 3:24 PM
 */

namespace Core\Factory;


class CreateUploaderInstanceAdapter extends Uploader
{
	/**
	 * @var \Core\Factory\Config
	 */
	private $className;

	public function __construct(string $key)
	{
		$this->className = Config::className($key);
	}

	public function factoryMethod(): UploadAdapterInterface
	{
		return new $this->className;
	}
}