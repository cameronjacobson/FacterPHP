<?php

namespace FacterPHP\Fact;

use \FacterPHP\Interfaces\FactInterface;

class Version implements FactInterface
{
	public function __construct($argv,$phpini=array()){
		
	}

	public function getFact(){
		return phpversion();
	}
}
