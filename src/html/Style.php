<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Media, Type};
class Style extends HTMLElement {
    use EventAttributes;
    use Media;
    use Type;
    public const MEDIA = Attr::MEDIA;
    public const TYPE = Attr::TYPE;
    public const TYPE_TEXT_CSS = Attr::TYPE_TEXT_CSS;
    protected $name = 'style';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
