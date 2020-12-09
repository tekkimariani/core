<?php
namespace tekki\core\html\attr;
trait Title{
	public function setTitle(string $text) {
		//	title
		//		Specifies extra information about an element
		//		<element title="text">
		return $this->appendAttribut([Attr::TITLE => $text]);
	}
}