<?php

use PHPUnit\Framework\TestCase;

final class TheTest extends TestCase {
	public function testThisNow() {
		var_dump( getenv( 'CAN_YOU_SEE_THIS' ) );
		$this->assertTrue( true );
	}
}
