<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{_For, From};
class Label extends HTMLElement {
    use EventAttributes;
    use _For;
    use From;
    public const FOR = Attr::FOR;
    public const FROM = Attr::FROM;
    protected $name = 'label';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
