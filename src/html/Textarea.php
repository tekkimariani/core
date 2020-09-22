<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Autofocus, Cols, Dirname, Disabled, Form, Maxlength, Name,
    Placeholder, Readonly, Required, Rows, Wrap};
class Textarea extends HTMLElement {
    use EventAttributes;
    use Autofocus;
    use Cols;
    use Dirname;
    use Disabled;
    use Form;
    use Maxlength;
    use Name;
    use Placeholder;
    use Readonly;
    use Required;
    use Rows;
    use Wrap;
    public const AUTOFOCUS = Attr::AUTOFOCUS;
    public const COLS = Attr::COLS;
    public const DIRNAME = Attr::DIRNAME;
    public const DISABLED = Attr::DISABLED;
    public const FORM = Attr::FORM;
    public const MAXLENGTH = Attr::MAXLENGTH;
    public const NAME = Attr::NAME;
    public const PLACEHOLDER = Attr::PLACEHOLDER;
    public const READONLY = Attr::READONLY;
    public const REQUIRED = Attr::REQUIRED;
    public const ROWS = Attr::ROWS;
    public const WRAP = Attr::WRAP;

    protected $name = 'textarea';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
