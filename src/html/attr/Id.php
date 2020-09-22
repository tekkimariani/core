<?php
namespace tekki\core\html\attr;
trait Id{
	public function setId($id) {
		//	id
		//		Specifies a unique id for the element.
		//		Naming rules:
		//		Must contain at least one character
		//		Must not contain any space characters
		$this->appendAttribut([Attr::ID => $id]);
	}
}