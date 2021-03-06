<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Colspan, Headers, Rowspan};
class Td extends HTMLElement {
    use EventAttributes;
    use Colspan;
    use Headers;
    use Rowspan;
    public const COLSPAN = Attr::COLSPAN;
    public const HEADERS = Attr::HEADERS;
    public const ROWSPAN = Attr::ROWSPAN;
    protected $name = 'td';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
