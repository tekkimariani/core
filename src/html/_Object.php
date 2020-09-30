<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Data, Form, Height, Name, Type, Typemustmatch, Usemap, Width};
class _Object extends HTMLElement {
    use EventAttributes;
    use Data;
    use Form;
    use Height;
    use Name;
    use Type;
    use Typemustmatch;
    use Usemap;
    use Width;
    public const DATA           = Attr::DATA;
    public const FORM           = Attr::FORM;
    public const HEIGHT         = Attr::HEIGHT;
    public const NAME           = Attr::NAME;
    public const TYPE           = Attr::TYPE;
    public const TYPEMUSTMATCH  = Attr::TYPEMUSTMATCH;
    public const USEMAP         = Attr::USEMAP;
    public const WIDTH          = Attr::WIDTH;
    protected $name = 'object';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
