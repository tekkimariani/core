<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Caption extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  The <caption> tag defines a table caption.
    //
    //  The <caption> tag must be inserted immediately after the <table> tag.
    //
    //  Tip: By default, a table caption will be center-aligned above a table.
    //  However, the CSS properties text-align and caption-side can be used to align and place the caption.
    //
    //  Contexts in which this element can be used:
    //  As the first element child of a table element.
    */
    protected $name = 'caption';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    
}
