<?php
namespace tekki\core\html\attr;
trait _Class{
	public function setClass($classname) {
		//	class
		//		Specifies one or more classnames for an element (refers to a class in a style sheet)
		//	classname
		//		Specifies one or more class names for an element.
		//		To specify multiple classes, separate the class names with a space, e.g. <span class="left important">.
		//		This allows you to combine several CSS classes for one HTML element.
		//		Naming rules:
		//		Must begin with a letter A-Z or a-z
		//		Can be followed by: letters (A-Za-z), digits (0-9), hyphens ("-"), and underscores ("_")
		return $this->appendAttribut([Attr::_CLASS => $classname]);
	}
}