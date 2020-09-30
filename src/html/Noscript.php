<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
class Noscript extends HTMLElement {
    protected $name = 'noscript';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }

    //link
    public function link(array $attr = [], string $content = null){
        $this->console->log(__METHOD__);
        return new link($this->doc, $this->element, $attr, $content);
    }
    
    //meta
    public function meta(array $attr = [], string $content = null){
        $this->console->log(__METHOD__);
        return new Meta($this->doc, $this->element);
    }
    
}