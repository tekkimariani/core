<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Meter extends HTMLElementEvent {
    protected $name = 'meter';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}