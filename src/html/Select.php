<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr, Autoplay};
use tekki\core\html\attr\{Autofocus, Disabled, Form, Multiple, Name, Required, Size};
class Select extends HTMLElement {
    use EventAttributes;
    use Autofocus;
    use Disabled;
    use Form;
    use Multiple;
    use Name;
    use Required;
    use Size;
    public const AUTOFOCUS  = Attr::AUTOFOCUS;
    public const DISABLED   = Attr::DISABLED;
    public const FORM       = Attr::FORM;
    public const MULTIPLE   = Attr::MULTIPLE;
    public const NAME       = Attr::NAME;
    public const REQUIRED   = Attr::REQUIRED;
    public const SIZE       = Attr::SIZE;
    protected $name = 'select';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
