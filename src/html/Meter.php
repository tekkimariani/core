<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Form, High, Low, Max, Min, Optimum, Value};
class Meter extends HTMLElement {
    use EventAttributes;
    use Form;
    use High;
    use Low;
    use Max;
    use Min;
    use Optimum;
    use Value;
    public const FORM       = Attr::FORM;
    public const HIGH       = Attr::HIGH;
    public const LOW        = Attr::LOW;
    public const MAX        = Attr::MAX;
    public const MIN        = Attr::MIN;
    public const OPTIMUM    = Attr::OPTIMUM;
    public const VALUE      = Attr::VALUE;
    protected $name = 'meter';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        // $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
