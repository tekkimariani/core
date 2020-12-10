<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
class Head extends HTMLElement {
    protected $name = 'head';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Tags that can be within <head>
    public function title(string $content=null){
        return new Title($this->doc, $this->element, [], $content);
    }
    /*
    //  this element is anyway in the all-tags-everywhere-section
    public function style(array $attr=[], string $content = null){
        return new Style($this->doc, $this->element, [], $content);
    }
    */
    public function base(array $attr=[]){
        return new Base($this->doc, $this->element, $attr);
    }
    public function link(array $attr=[]){
        return new Link($this->doc, $this->element, $attr);
    }
    public function meta(array $attr=[]){
        return new Meta($this->doc, $this->element, $attr);
    }
    public function script(array $attr=[], string $content=null){
        return new Script($this->doc, $this->element, [], $content);
    }
    public function noscript(array $attr=[], string $content=null){
        return new Noscript($this->doc, $this->element, [], $content);
    }
    public function includeCSS(string $filepath){
        return $this->link()->includeCSS($filepath);
    }
    public function includeJS(string $filepath, string $mode = null){
        return $this->script()->includeJS($filepath, $mode);
    }
    
}