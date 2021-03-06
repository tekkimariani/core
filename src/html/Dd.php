<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Dd extends HTMLElement {
    use EventAttributes;
    /*
    //  The <dd> tag is used to describe a term/name in a description list.
    //  The <dd> tag is used in conjunction with <dl> (defines a description list) and <dt> (defines terms/names).
    //  Inside a <dd> tag you can put paragraphs, line breaks, images, links, lists, etc.
    //  https://html.spec.whatwg.org/multipage/grouping-content.html#the-dd-element
    //  Contexts in which this element can be used:
    //  After dt or dd elements inside dl elements.
    //  After dt or dd elements inside div elements that are children of a dl element.
    */
    protected $name = 'dd';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
