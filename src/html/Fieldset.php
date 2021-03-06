<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Disabled, Form, Name};
class Fieldset extends HTMLElement {
    use EventAttributes;
    use Disabled;
    use Form;
    use Name;
    public const DISABLED   = Attr::DISABLED;
    public const FORM       = Attr::FORM;
    public const NAME       = Attr::NAME;
    protected $name = 'fieldset';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
