<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Disabled, Label};
class Optgroup extends HTMLElement {
    use EventAttributes;
    use Disabled;
    use Label;
    public const DISABLED   = Attr::DISABLED;
    public const LABEL      = Attr::LABEL;
    protected $name = 'optgroup';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
