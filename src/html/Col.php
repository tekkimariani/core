<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Col extends HTMLElementEvent {
    /*
    //  The <col> tag specifies column properties for each column within a <colgroup> element.
    //
    //  The <col> tag is useful for applying styles to entire columns, instead of repeating the styles for each cell, for each row.
    */
    /*
    // span	number	Specifies the number of columns a <col> element should span
    */
    public const SPAN = parent::SPAN;
    protected $name = 'col';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrSpan(int $col){
        $this->appendAttribut([self::SPAN => $col]);
    }
}