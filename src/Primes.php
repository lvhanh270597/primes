<?php

namespace App;

class Primes {
	
	private $N;

	public function __construct($N){
		$this->N = $N;
	}
	public function dem_uoc(){
		$cnt = 0;
		for ($i=1; $i<=$this->N; $i++){
			if ($this->N % $i == 0){
				$cnt += 1;
			}
		}
		return $cnt;
	}
	public function kiemtra(){
		return $this->dem_uoc() == 2;
	}
}
