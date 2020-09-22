<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{Attr};
use tekki\core\html\attr\{Href, Target};
class Base extends HTMLElement {
    use Href;
    use Target;
    public const HREF           = Attr::HREF;
    public const TARGET         = Attr::TARGET;
    public const TARGET_BLANK   = Attr::TARGET_BLANK;
    public const TARGET_PARENT  = Attr::TARGET_PARENT;
    public const TARGET_SELF    = Attr::TARGET_SELF;
    public const TARGET_TOP     = Attr::TARGET_TOP;
    protected $name = 'base';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    public function attrHref(string $url) {
        //	href
        //		Required. Specifies the relationship between the current document and the linked document
        //	    URL
        $this->appendAttribut([self::HREF => $url]);
    }
    */
    /*
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
    */
}