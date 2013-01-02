<?php

namespace FacterPHP\Fact;

use \FacterPHP\Interfaces\FactInterface;

class BCMath implements FactInterface
{
	protected $callable;

	public function __construct($argv){
		switch($argv[2]){
			case 'installed':
				$this->callable = $this->isInstalled();
				break;
			default:
				break;
		}
	}

	public function getFact(){
		return empty($this->callable) ? 'unknown' : call_user_func($this->callable);
	}

	public function isInstalled(){
		return function(){
			return function_exists('bcadd') ? 'yes' : 'no';
		};
	}
}
