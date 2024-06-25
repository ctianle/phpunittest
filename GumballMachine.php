<?php

class GumballMachine {

	private $gumballs;
	
	public function getGumballs() {
		return $this->gumballs;
	}
	
	public function setGumballs($amount) {
		$this->gumballs = $amount;
	}
	
	public function turnWheel() {
		// change 1 to 2 to introduce error.
		// $this->setGumballs($this->getGumballs()-1);

		$this->setGumballs($this->getGumballs()-2);
	}
}
