<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Code extends HTMLElementEvent {
    /*
    //  The <code> tag is used to define a piece of computer code. The content inside is displayed in the browser's default monospace font.
    //
    //  Tip: This tag is not deprecated. However, it is possible to achieve richer effect by using CSS (see example below).
    */
    protected $name = 'code';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Only uses global attributes.
}
