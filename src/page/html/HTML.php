<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class HTML extends HTMLElement {
    protected $name = 'html';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function __destruct(){
        echo $this->saveHTML();
    }
    // Tags, that only nestet in html
    public function head(){
        $this->console->log(__METHOD__);
        return new Head($this->doc, $this->element, [], null);
    }
    public function body(array $attr = [], string $value = null){
        $this->console->log(__METHOD__);
        return new Body($this->doc, $this->element, $attr, $value);
    }
    // Attribute
    //      Lang
    public function lang($languageCode){
        $this->attrLang($languageCode);
    }
}