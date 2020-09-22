<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Datalist extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  The <datalist> tag specifies a list of pre-defined options for an <input> element.
    //
    //  The <datalist> tag is used to provide an "autocomplete" feature for <input> elements. Users will see a drop-down list of pre-defined options as they input data.
    //
    //  The <datalist> element's id attribute must be equal to the <input> element's list attribute (this binds them together).
    */
    protected $name = 'datalist';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
