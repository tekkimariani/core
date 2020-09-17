<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Noscript extends HTMLElement {
    protected $name = 'noscript';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }

    //a
    /*
    public function a(array $attr = [], string $content = null){
        $this->console->log(__METHOD__);
        return new A($this->doc, $this->element, $attr, $content);
    }
    */
    //br
    public function br(array $attr = [], string $content = null){
        $this->console->log(__METHOD__);
        return new Br($this->doc, $this->element);
    }
}