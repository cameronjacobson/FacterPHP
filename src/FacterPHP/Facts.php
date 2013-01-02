<?php

namespace FacterPHP;

class Facts
{
	protected $fact;

	public function __construct($argv){
		$class = 'FacterPHP\Fact\\'.$argv[1];
		$this->fact = new $class($argv);
	}

	public function getFact(){
		return $this->fact->getFact();
	}
}
