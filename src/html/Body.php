<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Body extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  The <body> tag defines the document's body.
    //
    //  The <body> element contains all the contents of an HTML document,
    //  such as headings, paragraphs, images, hyperlinks, tables, lists, etc.
    //
    //  Note: There can only be one <body> element in an HTML document.
    */
    protected $name = 'body';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}