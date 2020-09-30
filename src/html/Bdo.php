<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Bdo extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  BDO stands for Bi-Directional Override.
    //
    //  The <bdo> tag is used to override the current text direction.
    */
    protected $name = 'bdo';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}