<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Value};
class Li extends HTMLElement {
    use EventAttributes;
    use Value;
    public const VALUE = Attr::VALUE;
    protected $name = 'li';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
