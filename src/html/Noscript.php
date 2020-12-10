<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
class Noscript extends HTMLElement {
    protected $name = 'noscript';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // https://developer.mozilla.org/de/docs/Web/HTML/Element/noscript
    public function link(array $attr = [], string $content = null){
        return new Link($this->doc, $this->element, $attr, $content);
    }
    public function meta(array $attr = [], string $content = null){
        return new Meta($this->doc, $this->element);
    }
}