<?php

namespace FacterPHP;

class Facts
{
	protected $fact;

	public function __construct($argv){
		$class = 'FacterPHP\Fact\\'.$argv[1];
		$phpini = parse_ini_file(FACTER_PHP_DIR.'/config/'.CONFIG_FILENAME);
		$this->fact = new $class($argv,$phpini);
	}

	public function getFact(){
		return $this->fact->getFact();
	}
}
