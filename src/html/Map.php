<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Name};
class Map extends HTMLElement {
    use EventAttributes;
    use Name;
    public const NAME = Attr::NAME;
    protected $name = 'map';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Tags, that only nestet in html
    public function area(array $attr = [], string $value = null){
        $this->console->log(__METHOD__);
        return new Head($this->doc, $this->element, $attr, $value);
    }
}
