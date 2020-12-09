<?php
namespace tekki\core\html\attr;
trait Spellcheck{
	public function setSpellcheck(bool $bool) {
		//	spellcheck
		//		Specifies whether the element is to have its spelling and grammar checked or not
		//		<element spellcheck="true|false">
		//		The following can be spellchecked:
		//		Text values in input elements (not password)
		//		Text in <textarea> elements
		//		Text in editable elements
		return $this->appendAttribut([Attr::SPELLCHECK => ($bool ? Attr::SPELLCHECK_TRUE : Attr::SPELLCHECK_FALSE)]);
	}
	public function setSpellcheckTrue(){
		return $this->setSpellcheck(true);
	}
	public function setSpellcheckFalse(){
		return $this->setSpellcheck(false);
	}
}