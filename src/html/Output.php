<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{_For, Form, Name};
class Output extends HTMLElement {
    use EventAttributes;
    use _For;
    use Form;
    use Name;
    public const FOR = Attr::FOR;
    public const FORM = Attr::FORM;
    public const NAME = Attr::NAME;
    protected $name = 'output';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
