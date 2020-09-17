<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Base extends HTMLElement {
    public const HREF = parent::HREF;
    public const TARGET = parent::TARGET;
    public const TARGET_BLANK = parent::TARGET_BLANK;
    public const TARGET_PARENT = parent::TARGET_PARENT;
    public const TARGET_SELF = parent::TARGET_SELF;
    public const TARGET_TOP = parent::TARGET_TOP;
    protected $name = 'base';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrHref(string $url) {
        //	href
        //		Required. Specifies the relationship between the current document and the linked document
        //	    URL
        $this->appendAttribut([self::HREF => $url]);
    }
    public function attrTarget(string $target) {
        //	target
        //		Required. Specifies the relationship between the current document and the linked document
        //	    target
        $this->appendAttribut([self::TARGET => $target]);
    }
    public function attrTargetBlank() {
        $this->attrTarget(self::TARGET_BLANK);
    }
    public function attrTargetParent() {
        $this->attrTarget(self::TARGET_PARENT);
    }
    public function attrTargetSelf() {
        $this->attrTarget(self::TARGET_SELF);
    }
    public function attrTargetTop() {
        $this->attrTarget(self::TARGET_TOP);
    }
}