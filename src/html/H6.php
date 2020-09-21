<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class H6 extends HTMLElementEvent {
    protected $name = 'h6';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}