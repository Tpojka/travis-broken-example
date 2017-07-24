<?php

require __DIR__.'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
}

?>
