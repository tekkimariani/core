<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Div extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    protected $name = 'div';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        // $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    //  https://html.spec.whatwg.org/multipage/grouping-content.html#the-dd-element
    //  Contexts in which this element can be used:
    //  After dt or dd elements inside dl elements.
    //  After dt or dd elements inside div elements that are children of a dl element.
    */
    public function dd(array $attr = [], string $value = null){
    	// $this->console->log(__METHOD__);
    	return new Dd($this->doc, $this->element, $attr, $value);
	}
}
