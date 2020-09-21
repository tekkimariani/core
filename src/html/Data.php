<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Data extends HTMLElement {
    /*
    //  The <data> tag is used to add a machine-readable translation of a given content.
    //
    //  This element provides both a machine-readable value for data processors, and a human-readable value for rendering in a browser.
    //
    //  Tip: If the content is time- or date-related, use the <time> element instead.
    */
    /*
    // value	machine-readable format	Specifies the machine-readable translation of the content of the element
    */
    public const VALUE = parent::VALUE;
    protected $name = 'data';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrValue(int $value){
        $this->appendAttribut([self::VALUE => $value]);
    }
}