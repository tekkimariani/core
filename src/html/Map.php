<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Name};
class Map extends HTMLElement {
    use EventAttributes;
    use Name;
    public const NAME = Attr::NAME;
    protected $name = 'map';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Tags, that only nestet in map
    public function area(array $attr = [], string $value = null){
        return new Area($this->doc, $this->element, $attr, $value);
    }
}
