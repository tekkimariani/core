<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Span};
class Colgroup extends HTMLElement {
    use EventAttributes;
    use Span;
    /*
    //  The <colgroup> tag specifies a group of one or more columns in a table for formatting.
    //  The <colgroup> tag is useful for applying styles to entire columns,
    //  instead of repeating the styles for each cell, for each row.
    //  Note: The <colgroup> tag must be a child of a <table> element, after any <caption> elements
    //  and before any <thead>, <tbody>, <tfoot>, and <tr> elements.
    //  Tip: To define different properties to a column within a <colgroup>, use the <col> tag within the <colgroup> tag.
    */
    public const SPAN = Attr::SPAN;
    protected $name = 'colgroup';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    //  Contexts in which col element can be used:
    //  As a child of a colgroup element that doesn't have a span attribute.
    */
    public function col(array $attr = [], string $value = null){
        return new Col($this->doc, $this->element, $attr, $value);
    }
}
