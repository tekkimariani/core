<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use tekki\core\php\DOMComment;
use FirePHP;
class HTMLElement extends HTMLAttr{
    protected ?DOMDocument $doc = null;
	protected ?DOMElement $element = null;
	protected $name;
	public function __construct($name, DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
		$this->console->log(__METHOD__);
		if($doc instanceof DOMDocument){
			$this->console->log(__METHOD__.': old $doc');
			$this->doc = $doc;
		}
        if(!$this->doc instanceof DOMDocument){
			$this->console->log(__METHOD__.': new $doc');
            $this->doc = new DOMDocument();
		}
        $this->element = $this->create($name, $container, $attr, $content); 		
	}
	public function __destruct(){
		$html = '<!doctype html>'.$this->doc->saveHTML();
        $this->console->log(__METHOD__.': '.$html);
		return $html;
	}
	public function save(DOMElement $html): void{
        $this->console->log(__METHOD__);
		$this->doc->appendChild($html);
	}
	public function comment(string $value=null, DOMElement $container=null){
        $this->console->log(__METHOD__);
		//$element = $this->doc->createComment($content);
		$element = $this->doc->appendChild(new DOMComment($value));
		//$element = new DOMComment($value);
		if($container){
			return $container->appendChild($element);
			// $element;
		}else{
			return $this->element->appendChild($element);
		}
	}
	protected function create(string $name, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console->log(__METHOD__.': name: '.$name);	
		/*	
		if($container){
			$con = ',$container="'.$container->nodeName.'",$attr, $content="'.$content.'"';
		}else{ $con=''; }
		*/
		//$element = $this->doc->createElement($name);
		$element = $this->doc->appendChild(new DOMElement($name));
		if(count($attr)){
			foreach($attr as $key => $value){
				$item = $this->doc->createAttribute($key);
				$item->value = htmlentities($value);
				$element->appendChild($item);
			}
		}
		if($content!=null){
			$content = $this->doc->createTextNode($content);
			$element->appendChild($content);
		}
		if($container){
			$container->appendChild($element);
			return $element;
		}else{
			return $this->doc->appendChild($element);
		}
	}
	public function text($content){
		if($content!=null){
			$content = $this->doc->createTextNode($content);
			$this->element->appendChild($content);
		}
	}
	public function appendAttribut(array $attr=[]){
		if(count($attr)){
			foreach($attr as $key => $value){
				$item = $this->doc->createAttribute($key);
				$item->value = htmlentities($value);
				$this->element->appendChild($item);
			}
		}
	}
    public function appendElement(HTMLElement $htmlelement){
        $this->console->log(__METHOD__.': this: '.$this->name);
        $this->console->log(__METHOD__.': name: '.$htmlelement->name);
        $element = $this->doc->importNode($htmlelement->getElement(), true);
        $this->element->appendChild($element);
    }
    public function getElement(){
        $this->console->log(__METHOD__);
        return $this->element;
	}
	

	// #######################################################
	// Global Attributes that can be within every HTML Element
	// #######################################################


	public function attrAccesskey(string $character) {
		//	accesskey
		//		Specifies a shortcut key to activate/focus an element
		//	character
		//		A single character that specifies the shortcut key to activate/focus the element
		$this->appendAttribut([self::ACCESSKEY => $character]);
	}


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
		$this->appendAttribut([self::_CLASS => $classname]);
	}


	public function attrContenteditable(bool $contenteditable) {
		//	contenteditable
		//		Specifies whether the content of an element is editable or not
		//		<element contenteditable="true|false">
		//		true	Specifies that the element is editable
		//		false	Specifies that the element is not editable
		$this->appendAttribut([self::CONTENTEDITABLE => ($contenteditable ? self::CONTENTEDITABLE_TRUE : self::CONTENTEDITABLE_FALSE)]);
	}
	public function attrContenteditableTrue(){
		$this->attrContenteditable(true);
	}
	public function attrContenteditableFalse(){
		$this->attrContenteditable(false);
	}


	public function attrDataCustom(string $name, string $value) {
		//	data-*
		//		Used to store custom data private to the page or application
		//		The attribute name should not contain any uppercase letters, and must be at least one character long after the prefix "data-"
		//		The attribute value can be any string
		$this->appendAttribut(['data-'.$name => $value]);
	}


	public function attrDir(string $direction) {
		//	dir
		//		Specifies the text direction for the content in an element
		//		<element dir="ltr|rtl|auto">
		//		ltr		Default. Left-to-right text direction
		//		rtl		Right-to-left text direction
		//		auto	Let the browser figure out the text direction, based on the content (only recommended if the text direction is unknown)
		$this->appendAttribut([self::DIR => $direction]);
	}
	public function attrDirLtr(){
		$this->attrDir(self::DIR_LTR);
	}
	public function attrDirRtl(){
		$this->attrDir(self::DIR_RTL);
	}
	public function attrDirAuto(){
		$this->attrDir(self::DIR_AUTO);
	}


	public function attrDraggable(string $mode) {
		//	draggable
		//		Specifies whether an element is draggable or not
		//		<element draggable="true|false|auto">
		//		true	Specifies that the element is draggable
		//		false	Specifies that the element is not draggable
		//		auto	Uses the default behavior of the browser
		$this->appendAttribut(['draggable' => $mode]);
	}
	public function attrDraggableTrue() {
		$this->attrDraggable(self::DRAGGABLE_TRUE);
	}
	public function attrDraggableFalse() {
		$this->attrDraggable(self::DRAGGABLE_FALSE);
	}
	public function attrDraggableAuto() {
		$this->attrDraggable(self::DRAGGABLE_AUTO);
	}


	public function attrHidden() {
		//	hidden
		//		Specifies that an element is not yet, or is no longer, relevant
		//		<element hidden>
		$this->appendAttribut([self::HIDDEN => null]);
	}
	public function attrId($id) {
		//	id
		//		Specifies a unique id for the element.
		//		Naming rules:
		//		Must contain at least one character
		//		Must not contain any space characters
		$this->appendAttribut([self::ID => $id]);
	}


	public function attrLang($code) {
		//	lang
		//		Specifies the language of the element's content
		//		<element lang="language_code">
		$this->appendAttribut([self::LANG => $code]);
	}


	public function attrSpellcheck(bool $bool) {
		//	spellcheck
		//		Specifies whether the element is to have its spelling and grammar checked or not
		//		<element spellcheck="true|false">
		//		The following can be spellchecked:
		//		Text values in input elements (not password)
		//		Text in <textarea> elements
		//		Text in editable elements
		$this->appendAttribut([self::SPELLCHECK => ($bool ? self::SPELLCHECK_TRUE : self::SPELLCHECK_FALSE)]);
	}
	public function attrSpellcheckTrue(){
		$this->attrSpellcheck(true);
	}
	public function attrSpellcheckFalse(){
		$this->attrSpellcheck(false);
	}


	public function attrStyle(string $style) {
		//	style
		//		Specifies an inline CSS style for an element
		//		<element style="style_definitions">
		//		One or more CSS properties and values separated by semicolons (e.g. style="color:blue;text-align:center")
		$this->appendAttribut([self::STYLE => $style]);
	}


	public function attrTabindex(int $number) {
		//	tabindex
		//		Specifies the tabbing order of an element
		//		<element tabindex="number">
		$this->appendAttribut([self::TABINDEX => $number]);
	}


	public function attrTitle(string $text) {
		//	title
		//		Specifies extra information about an element
		//		<element title="text">
		$this->appendAttribut([self::TITLE => $text]);
	}


	public function attrTranslate(bool $bool) {
		//	translate
		//		Specifies whether the content of an element should be translated or not
		//		<element translate="yes|no">
		$this->appendAttribut([self::TRANSLATE => ($bool ? 'yes' : 'no')]);
	}

	//
	//	Da es nicht möglich ist in PHP die Klassen mit den Namen 'Object' oder 'Var' anzulegen,
	//	hier entsprechende Pseudoelemente die in allen HTMLElementen verfügbar sind und die 
	//	entsprechenden Tag-Objecte erzeugen.
	//
	//	Btw. sind beide HTML-Elemente sinnlos und können je nach Anwendung ersetzt werden:
	//	Bei Object:
	//  	Bilder => <img>
	//		HTML   => <iframe>
	//		Audio  => <audio>
	//		Video  => <video>
	//	Bei Var:
	//		However, it is possible to achieve richer effect by using CSS.
	//
	public function _object(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
		return new HTMLElementEvent('object', $doc, $container, $attr, $content);
	}
	/*
	<var> wird in der Klasse Variable behandelt.
	public function _var(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
		return new HTMLElementEvent('var', $doc, $container, $attr, $content);
	}
	*/

	/*
    //	HTML Tags
    */
    public function a(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new A($this->doc, $this->element, $attr, $value);
    }
    public function abbr(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Abbr($this->doc, $this->element, $attr, $value); 	
    }
    public function address(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Address($this->doc, $this->element, $attr, $value);
	}
	/*
	// <area> elements are always nested inside a <map> tag.
    public function area(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Area($this->doc, $this->element, $attr, $value);
	}
	*/
    public function article(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Article($this->doc, $this->element, $attr, $value);
    }
    public function aside(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Aside($this->doc, $this->element, $attr, $value);
    }
    public function audio(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Audio($this->doc, $this->element, $attr, $value);
    }
    public function b(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new B($this->doc, $this->element, $attr, $value);
	}
	/*
	// There can only be one single <base> element in a document, and it must be inside the <head> element.
    public function base(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Base($this->doc, $this->element, $attr, $value);
	}
	*/
    public function bdi(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Bdi($this->doc, $this->element, $attr, $value);
    }
    public function bdo(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Bdo($this->doc, $this->element, $attr, $value);
    }
    public function blockquote(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Blockquote($this->doc, $this->element, $attr, $value);
	}
	/*
	// The <body> element is only allowed in the <html> element.
    public function body(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Body($this->doc, $this->element, $attr, $value);
	}
	*/
    public function br(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Br($this->doc, $this->element, $attr, $value);
    }
    public function button(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Button($this->doc, $this->element, $attr, $value);
    }    
    public function canvas(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Canvas($this->doc, $this->element, $attr, $value);
	}
	/*
	//  Contexts in which this element can be used:
    //  As the first element child of a table element.
    public function caption(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new caption($this->doc, $this->element, $attr, $value);
	}
	*/
    public function cite(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Cite($this->doc, $this->element, $attr, $value);
    }
    public function code(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Code($this->doc, $this->element, $attr, $value);
	}
	/*
	//	Contexts in which this element can be used:
	//	As a child of a colgroup element that doesn't have a span attribute.
    public function col(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Col($this->doc, $this->element, $attr, $value);
	}
	*/
	/*
	//	Contexts in which this element can be used:
	//	As a child of a table element, after any caption elements and before any thead, tbody, tfoot, and tr elements.
    public function colgroup(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Colgroup($this->doc, $this->element, $attr, $value);
	}
	*/
	public function data(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Data($this->doc, $this->element, $attr, $value);
    }
    public function datalist(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Datalist($this->doc, $this->element, $attr, $value);
	}
	/*
    //  https://html.spec.whatwg.org/multipage/grouping-content.html#the-dd-element
    //  Contexts in which this element can be used:
    //  After dt or dd elements inside dl elements.
    //  After dt or dd elements inside div elements that are children of a dl element.
    public function dd(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Dd($this->doc, $this->element, $attr, $value);
	}
	*/
    public function del(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Del($this->doc, $this->element, $attr, $value);
    }
    public function details(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Details($this->doc, $this->element, $attr, $value);
    }
    public function dfn(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Dfn($this->doc, $this->element, $attr, $value);
    }
    public function dialog(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Dialog($this->doc, $this->element, $attr, $value);
	}
	
    public function div(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Div($this->doc, $this->element, $attr, $value);
	}
	
    public function dl(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Dl($this->doc, $this->element, $attr, $value);
    }   
    public function dt(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Dt($this->doc, $this->element, $attr, $value);
    }
    public function em(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Em($this->doc, $this->element, $attr, $value);
    }
    public function embed(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Embed($this->doc, $this->element, $attr, $value);
    }
    public function fieldset(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Fieldset($this->doc, $this->element, $attr, $value);
    }
    public function figcaption(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Figcaption($this->doc, $this->element, $attr, $value);
    }
    public function figure(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Figure($this->doc, $this->element, $attr, $value);
    }
    public function footer(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Footer($this->doc, $this->element, $attr, $value);
    }
    public function form(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Form($this->doc, $this->element, $attr, $value);
    }
    public function h1(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new H1($this->doc, $this->element, $attr, $value);
    }
    public function h2(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new H2($this->doc, $this->element, $attr, $value);
    }
    public function h3(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new H3($this->doc, $this->element, $attr, $value);
    }
    public function h4(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new H4($this->doc, $this->element, $attr, $value);
    }
    public function h5(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new H5($this->doc, $this->element, $attr, $value);
    }
    public function h6(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new H6($this->doc, $this->element, $attr, $value);
	}
	/*
	// The <head> element is only allowed in the <html> element.
    public function head(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Head($this->doc, $this->element, $attr, $value);
	}
	*/ 
    public function header(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Header($this->doc, $this->element, $attr, $value);
    }    
    public function hr(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Hr($this->doc, $this->element, $attr, $value);
	}
	/*
	// The <html> element must not be located anywhere in the document; it have to been the root element and it must be instantiated.
    public function html($container=null,$attr=array(),$value=null){
    	$this->console->log(__METHOD__);
    	return $this->create('html',$container,$attr,$value);
	}
	*/
    public function i(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new I($this->doc, $this->element, $attr, $value);
    }
    public function iframe(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Iframe($this->doc, $this->element, $attr, $value);
    }
    public function img(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Img($this->doc, $this->element, $attr, $value);
    }
    public function input(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Input($this->doc, $this->element, $attr, $value);
    }
    public function ins(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Ins($this->doc, $this->element, $attr, $value);
    }
    public function kbd(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Kbd($this->doc, $this->element, $attr, $value);
    }
    public function keygen(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Keygen($this->doc, $this->element, $attr, $value);
    }
    public function label(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Label($this->doc, $this->element, $attr, $value);
    }
    public function legend(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Legend($this->doc, $this->element, $attr, $value);
    }
    public function li(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Li($this->doc, $this->element, $attr, $value);
	}
	/*
    public function link(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Link($this->doc, $this->element, $attr, $value);
	}
	*/ 
    public function main(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Main($this->doc, $this->element, $attr, $value);
    }
    public function map(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Map($this->doc, $this->element, $attr, $value);
    }
    public function mark(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Mark($this->doc, $this->element, $attr, $value);
	}
	/*
	// Not supported by browsers
    public function menu(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Menu($this->doc, $this->element, $attr, $value);
	}
	// Not longer within the HTML5 standard
    public function menuitem(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Menuitem($this->doc, $this->element, $attr, $value);
	}
	*/
	/*
    public function meta(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Meta($this->doc, $this->element, $attr, $value);
	}
	*/
    public function meter(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Meter($this->doc, $this->element, $attr, $value);
    }
    public function nav(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Nav($this->doc, $this->element, $attr, $value);
    }
    public function noscript(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Noscript($this->doc, $this->element, $attr, $value);
    }
    public function object(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return $this->_object($this->doc, $this->element, $attr, $value);
    }
    public function ol(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Ol($this->doc, $this->element, $attr, $value);
    }
    public function optgroup(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Optgroup($this->doc, $this->element, $attr, $value);
    }
    public function option(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Option($this->doc, $this->element, $attr, $value);
    }
    public function output(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Output($this->doc, $this->element, $attr, $value);
    }
    public function p(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new P($this->doc, $this->element, $attr, $value);
    }
    public function param(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Param($this->doc, $this->element, $attr, $value);
    }
    public function pre(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Pre($this->doc, $this->element, $attr, $value);
    }
    public function progress(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Progress($this->doc, $this->element, $attr, $value);
    }
    public function q(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Q($this->doc, $this->element, $attr, $value);
    }
    public function rp(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Rp($this->doc, $this->element, $attr, $value);
    }
    public function rt(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Rt($this->doc, $this->element, $attr, $value);
    }
    public function ruby(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Ruby($this->doc, $this->element, $attr, $value);
    }
    public function s(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new S($this->doc, $this->element, $attr, $value);
    }
    public function samp(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Samp($this->doc, $this->element, $attr, $value);
    }
    public function script(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Script($this->doc, $this->element, $attr, $value);
    }
    public function section(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Section($this->doc, $this->element, $attr, $value);
    }
    public function select(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Select($this->doc, $this->element, $attr, $value);
    }
    public function small(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Small($this->doc, $this->element, $attr, $value);
    }
    public function source(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Source($this->doc, $this->element, $attr, $value);
    }
    public function span(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Span($this->doc, $this->element, $attr, $value);
    }
    public function strong(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Strong($this->doc, $this->element, $attr, $value);
    }
    public function style(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Style($this->doc, $this->element, $attr, $value);
    }
    public function sub(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Sub($this->doc, $this->element, $attr, $value);
    }
    public function summary(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Summary($this->doc, $this->element, $attr, $value);
    }
    public function sup(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Sup($this->doc, $this->element, $attr, $value);
    }
    public function table(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Table($this->doc, $this->element, $attr, $value);
    }
    public function tbody(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Tbody($this->doc, $this->element, $attr, $value);
    }
    public function td(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Td($this->doc, $this->element, $attr, $value);
    }
    public function textarea(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Textarea($this->doc, $this->element, $attr, $value);
    }
    public function tfoot(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Tfoot($this->doc, $this->element, $attr, $value);
    }
    public function th(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Th($this->doc, $this->element, $attr, $value);
    }
    public function thead(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Thead($this->doc, $this->element, $attr, $value);
    }
    public function time(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Time($this->doc, $this->element, $attr, $value);
	}
	/*
    public function title(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Title($this->doc, $this->element, $attr, $value);
	}
	*/
    public function tr(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Tr($this->doc, $this->element, $attr, $value);
    }
    public function track(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Track($this->doc, $this->element, $attr, $value);
    }
    public function u(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new U($this->doc, $this->element, $attr, $value);
    }
    public function ul(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Ul($this->doc, $this->element, $attr, $value);
    }
    public function var(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Variable($this->doc, $this->element, $attr, $value);
    }
    public function video(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Video($this->doc, $this->element, $attr, $value);
    }
    public function wbr(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Wbr($this->doc, $this->element, $attr, $value);
    }
}