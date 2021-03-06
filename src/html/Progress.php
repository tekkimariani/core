<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Max, Value};
class Progress extends HTMLElement {
    use EventAttributes;
    use Max;
    use Value;
    public const MAX    = Attr::MAX;
    public const VALUE  = Attr::VALUE;
    protected $name = 'progress';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
