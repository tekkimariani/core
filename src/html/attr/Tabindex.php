<?php
namespace tekki\core\html\attr;
trait Tabindex{
	public function setTabindex(int $number) {
		//	tabindex
		//		Specifies the tabbing order of an element
		//		<element tabindex="number">
		return $this->appendAttribut([Attr::TABINDEX => $number]);
	}
}