<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class H1 extends HTMLElementEvent {
    protected $name = 'h1';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
