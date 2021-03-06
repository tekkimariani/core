<?php
namespace tekki\core\html\attr;
trait Contenteditable{
	public function setContenteditable(bool $contenteditable) {
		//	contenteditable
		//		Specifies whether the content of an element is editable or not
		//		<element contenteditable="true|false">
		//		true	Specifies that the element is editable
		//		false	Specifies that the element is not editable
		return $this->appendAttribut([Attr::CONTENTEDITABLE => ($contenteditable ? Attr::CONTENTEDITABLE_TRUE : Attr::CONTENTEDITABLE_FALSE)]);
    }
    public function attrContenteditableTrue(){
		return $this->attrContenteditable(true);
	}
	public function attrContenteditableFalse(){
		return $this->attrContenteditable(false);
	}
}