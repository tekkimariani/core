<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
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
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}