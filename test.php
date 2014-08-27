<?php

require 'vendor/autoload.php';

if(version_compare(phpversion(), '5.5.13', '<'))
{
	die('Tested with PHP 5.5.13 and 5.5.16');
}

class MyTest extends \PHPUnit_Framework_TestCase
{
	public function testMock()
	{
		$file = $this->getMockBuilder('Symfony\Component\HttpFoundation\File\File')
			->disableOriginalConstructor()
			->getMock();
	}
}
