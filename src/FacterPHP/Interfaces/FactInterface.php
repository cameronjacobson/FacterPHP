<?php

namespace FacterPHP\Interfaces;

interface FactInterface
{
	public function __construct($argv,$phpini=array());
	public function getFact();
}
