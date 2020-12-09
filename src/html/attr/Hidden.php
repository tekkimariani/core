<?php
namespace tekki\core\html\attr;
trait Hidden{
	public function setHidden() {
		//	hidden
		//		Specifies that an element is not yet, or is no longer, relevant
		//		<element hidden>
		return $this->appendAttribut([Attr::HIDDEN => null]);
	}
}