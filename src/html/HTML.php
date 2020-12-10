<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
class HTML extends HTMLElement {
    protected $name = 'html';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function __destruct(){
        echo $this->saveHTML();
    }
    // Tags, that only nestet in html
    public function head(){
        return new Head($this->doc, $this->element, [], null);
    }
    public function body(array $attr = [], string $value = null){
        return new Body($this->doc, $this->element, $attr, $value);
    }
}