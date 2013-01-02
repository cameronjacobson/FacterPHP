<?php

namespace FacterPHP\Fact;

use \FacterPHP\Interfaces\FactInterface;

class Version implements FactInterface
{
	public function __construct($argv){
		
	}

	public function getFact(){
		return phpversion();
	}
}
