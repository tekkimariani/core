<?php
namespace tekki\core\php;
class Exception extends \Exception{
	public function __construct($msg){
	    parent::__construct($msg);
	}
}