<?php
namespace tekki\core\html\attr;
trait Lang{
	public function setLang($code) {
		//	lang
		//		Specifies the language of the element's content
		//		<element lang="language_code">
		$this->appendAttribut([Attr::LANG => $code]);
	}
}