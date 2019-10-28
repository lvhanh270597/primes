<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Primes;

class PrimeTest extends TestCase {
	private $prime;
	
       /**
        * @dataProvider providerTestall
        */
	public function testall($num, $remind, $check){
		$this->prime = new Primes($num);
		$this->assertEquals($this->prime->dem_uoc(), $remind);
		$this->assertEquals($this->prime->kiemtra(), $check);
	}
	public function providerTestall(){
		return [
			[1, 1, false],
			[2, 2, true],
			[3, 2, true],
			[4, 3, false],
			[7, 2, true]
		];
	}
}

