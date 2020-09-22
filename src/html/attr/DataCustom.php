<?php
namespace tekki\core\html\attr;
trait DataCustom{
	public function setDataCustom(string $name, string $value) {
		//	data-*
		//		Used to store custom data private to the page or application
		//		The attribute name should not contain any uppercase letters, and must be at least one character long after the prefix "data-"
		//		The attribute value can be any string
		$this->appendAttribut(['data-'.$name => $value]);
	}
}