<?php
namespace tekki\core\html\attr;
trait Translate{
	public function setTranslate(bool $bool) {
		//	translate
		//		Specifies whether the content of an element should be translated or not
		//		<element translate="yes|no">
		$this->appendAttribut([Attr::TRANSLATE => ($bool ? 'yes' : 'no')]);
	}
}