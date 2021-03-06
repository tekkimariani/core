<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{Attr};
use tekki\core\html\attr\{Value};
class Data extends HTMLElement {
    use Value;
    /*
    //  The <data> tag is used to add a machine-readable translation of a given content.
    //  This element provides both a machine-readable value for data processors,
    //  and a human-readable value for rendering in a browser.
    //  Tip: If the content is time- or date-related, use the <time> element instead.
    */
    public const VALUE = Attr::VALUE;
    protected $name = 'data';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}