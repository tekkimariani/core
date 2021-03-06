<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Cite, Datetime};
class Del extends HTMLElement {
    use EventAttributes;
    use Cite;
    use Datetime;
    public const CITE =         Attr::CITE;
    public const DATETIME =     Attr::DATETIME;
    protected $name = 'del';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
