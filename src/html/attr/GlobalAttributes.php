<?php
namespace tekki\core\html\attr;
trait GlobalAttributes{
    use Accesskey;
    use _Class;
    use Contenteditable;
    use DataCustom;
    use Dir;
    use Draggable;
	use Hidden;
	use Id;
    use Lang;
    use Spellcheck;
    use Style;
    use Tabindex;
    use Title;
    use Translate;
    /*  
    


    */
    /*
    public function attrAccesskey(string $character) {
		//	accesskey
		//		Specifies a shortcut key to activate/focus an element
		//	character
		//		A single character that specifies the shortcut key to activate/focus the element
		$this->appendAttribut([Attr::ACCESSKEY => $character]);
	}
    */
    /* 
	public function attrClass($classname) {
		//	class
		//		Specifies one or more classnames for an element (refers to a class in a style sheet)
		//	classname
		//		Specifies one or more class names for an element.
		//		To specify multiple classes, separate the class names with a space, e.g. <span class="left important">.
		//		This allows you to combine several CSS classes for one HTML element.
		//		Naming rules:
		//		Must begin with a letter A-Z or a-z
		//		Can be followed by: letters (A-Za-z), digits (0-9), hyphens ("-"), and underscores ("_")
		$this->appendAttribut([Attr::_CLASS => $classname]);
	}
    */
    /*
	public function attrContenteditable(bool $contenteditable) {
		//	contenteditable
		//		Specifies whether the content of an element is editable or not
		//		<element contenteditable="true|false">
		//		true	Specifies that the element is editable
		//		false	Specifies that the element is not editable
		$this->appendAttribut([Attr::CONTENTEDITABLE => ($contenteditable ? Attr::CONTENTEDITABLE_TRUE : Attr::CONTENTEDITABLE_FALSE)]);
	}
	public function attrContenteditableTrue(){
		$this->attrContenteditable(true);
	}
	public function attrContenteditableFalse(){
		$this->attrContenteditable(false);
	}
    */
    /*
	public function attrDataCustom(string $name, string $value) {
		//	data-*
		//		Used to store custom data private to the page or application
		//		The attribute name should not contain any uppercase letters, and must be at least one character long after the prefix "data-"
		//		The attribute value can be any string
		$this->appendAttribut(['data-'.$name => $value]);
	}
    */
    /*
	public function attrDir(string $direction) {
		//	dir
		//		Specifies the text direction for the content in an element
		//		<element dir="ltr|rtl|auto">
		//		ltr		Default. Left-to-right text direction
		//		rtl		Right-to-left text direction
		//		auto	Let the browser figure out the text direction, based on the content (only recommended if the text direction is unknown)
		$this->appendAttribut([Attr::DIR => $direction]);
	}
	public function attrDirLtr(){
		$this->attrDir(Attr::DIR_LTR);
	}
	public function attrDirRtl(){
		$this->attrDir(Attr::DIR_RTL);
	}
	public function attrDirAuto(){
		$this->attrDir(Attr::DIR_AUTO);
	}
    */
    /*
	public function attrDraggable(string $mode) {
		//	draggable
		//		Specifies whether an element is draggable or not
		//		<element draggable="true|false|auto">
		//		true	Specifies that the element is draggable
		//		false	Specifies that the element is not draggable
		//		auto	Uses the default behavior of the browser
		$this->appendAttribut([Attr::DRAGGABLE => $mode]);
	}
	public function attrDraggableTrue() {
		$this->attrDraggable(Attr::DRAGGABLE_TRUE);
	}
	public function attrDraggableFalse() {
		$this->attrDraggable(Attr::DRAGGABLE_FALSE);
	}
	public function attrDraggableAuto() {
		$this->attrDraggable(Attr::DRAGGABLE_AUTO);
	}
    */
    /*
	public function attrHidden() {
		//	hidden
		//		Specifies that an element is not yet, or is no longer, relevant
		//		<element hidden>
		$this->appendAttribut([Attr::HIDDEN => null]);
    }
    */
    /*
	public function attrId($id) {
		//	id
		//		Specifies a unique id for the element.
		//		Naming rules:
		//		Must contain at least one character
		//		Must not contain any space characters
		$this->appendAttribut([Attr::ID => $id]);
	}
    */
    /*
	public function attrLang($code) {
		//	lang
		//		Specifies the language of the element's content
		//		<element lang="language_code">
		$this->appendAttribut([Attr::LANG => $code]);
	}
    */
    /*
	public function attrSpellcheck(bool $bool) {
		//	spellcheck
		//		Specifies whether the element is to have its spelling and grammar checked or not
		//		<element spellcheck="true|false">
		//		The following can be spellchecked:
		//		Text values in input elements (not password)
		//		Text in <textarea> elements
		//		Text in editable elements
		$this->appendAttribut([Attr::SPELLCHECK => ($bool ? Attr::SPELLCHECK_TRUE : Attr::SPELLCHECK_FALSE)]);
	}
	public function attrSpellcheckTrue(){
		$this->attrSpellcheck(true);
	}
	public function attrSpellcheckFalse(){
		$this->attrSpellcheck(false);
	}
    */
    /*
	public function attrStyle(string $style) {
		//	style
		//		Specifies an inline CSS style for an element
		//		<element style="style_definitions">
		//		One or more CSS properties and values separated by semicolons (e.g. style="color:blue;text-align:center")
		$this->appendAttribut([Attr::STYLE => $style]);
	}
    */
    /*
	public function attrTabindex(int $number) {
		//	tabindex
		//		Specifies the tabbing order of an element
		//		<element tabindex="number">
		$this->appendAttribut([Attr::TABINDEX => $number]);
	}
    */
    /*
	public function attrTitle(string $text) {
		//	title
		//		Specifies extra information about an element
		//		<element title="text">
		$this->appendAttribut([Attr::TITLE => $text]);
	}
    */
    /*
	public function attrTranslate(bool $bool) {
		//	translate
		//		Specifies whether the content of an element should be translated or not
		//		<element translate="yes|no">
		$this->appendAttribut([Attr::TRANSLATE => ($bool ? 'yes' : 'no')]);
    }
    */
}