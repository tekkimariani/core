<?php
namespace tekki\core\html\attr;
trait Accesskey{
    public function setAccesskey(string $character) {
		//	accesskey
		//		Specifies a shortcut key to activate/focus an element
		//	character
		//		A single character that specifies the shortcut key to activate/focus the element
		$this->appendAttribut([Attr::ACCESSKEY => $character]);
	}
}