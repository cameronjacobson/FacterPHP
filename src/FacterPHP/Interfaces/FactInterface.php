<?php

namespace FacterPHP\Interfaces;

interface FactInterface
{
	public function __construct($argv);
	public function getFact();
}
