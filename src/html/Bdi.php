<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Bdi extends HTMLElementEvent {
    /*
    //  BDI stands for Bi-Directional Isolation.
    //
    //  The <bdi> tag isolates a part of text that might be formatted in a different direction from other text outside it.
    //
    //  This element is useful when embedding user-generated content with an unknown text direction.
    */
    protected $name = 'bdi';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Only uses global attributes.
}