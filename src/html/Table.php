<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Table extends HTMLElement {
    use EventAttributes;
    protected $name = 'table';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    //  Elements that only can be within <table>
    */
    /*
    //  Contexts in which this element can be used:
    //  As the first element child of a table element.
    //  HTML5  Standard: https://www.w3.org/TR/html50/tabular-data.html#the-caption-element
    */
    public function caption(array $attr = [], string $value = null){
        return new caption($this->doc, $this->element, $attr, $value);
    }
    /*
    //  Contexts in which this element can be used:
    //  As a child of a table element, after any caption elements and before any thead, tbody, tfoot, and tr elements.
    //  Living Standard: https://html.spec.whatwg.org/multipage/tables.html#the-colgroup-element
    //  HTML5  Standard: https://www.w3.org/TR/html50/tabular-data.html#the-colgroup-element
    */
    public function colgroup(array $attr = [], string $value = null){
        return new Colgroup($this->doc, $this->element, $attr, $value);
    }
}
