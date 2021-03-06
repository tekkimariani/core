<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Name, Value};
class Param extends HTMLElement {
    use EventAttributes;
    use Name;
    use Value;
    public const NAME = Attr::NAME;
    public const VALUE = Attr::VALUE;
    protected $name = 'param';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
