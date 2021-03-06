<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Code extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  The <code> tag is used to define a piece of computer code.
    //  The content inside is displayed in the browser's default monospace font.
    //  Tip: This tag is not deprecated. However, it is possible to achieve richer effect by using CSS (see example below).
    */
    protected $name = 'code';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
