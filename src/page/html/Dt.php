<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Dt extends HTMLElementEvent {
    protected $name = 'dt';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    //  https://html.spec.whatwg.org/multipage/grouping-content.html#the-dd-element
    //  Contexts in which this element can be used:
    //  After dt or dd elements inside dl elements.
    //  After dt or dd elements inside div elements that are children of a dl element.
    */
    public function dd(array $attr = [], string $value = null){
    	$this->console->log(__METHOD__);
    	return new Dd($this->doc, $this->element, $attr, $value);
	}
}
