<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Reversed, Start, Type};
class Ol extends HTMLElement {
    use EventAttributes;
    use Reversed;
    use Start;
    use Type;
    public const REVERSED   = Attr::REVERSED;
    public const START      = Attr::START;
    public const TYPE       = Attr::TYPE;
    protected $name = 'ol';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
