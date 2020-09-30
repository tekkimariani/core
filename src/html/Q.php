<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Cite};
class Q extends HTMLElement {
    use EventAttributes;
    use Cite;
    public const CITE = Attr::CITE;
    protected $name = 'q';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        // $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
