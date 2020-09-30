<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Abbr, Colspan, Headers, Rowspan, Scope};
class Th extends HTMLElement {
    use EventAttributes;
    use Abbr;
    use Colspan;
    use Headers;
    use Rowspan;
    use Scope;
    public const ABBR               = Attr::ABBR;
    public const COLSPAN            = Attr::COLSPAN;
    public const HEADERS            = Attr::HEADERS;
    public const ROWSPAN            = Attr::ROWSPAN;
    public const SCOPE              = Attr::SCOPE;
    public const SCOPE_COL          = Attr::SCOPE_COL;
    public const SCOPE_COLGROUP     = Attr::SCOPE_COLGROUP;
    public const SCOPE_ROW          = Attr::SCOPE_ROW;
    public const SCOPE_ROWGROUP     = Attr::SCOPE_ROWGROUP;
    protected $name = 'th';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
