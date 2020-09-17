<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class B extends HTMLElementEvent {
    /*
    //  Note: According to the HTML5 specification, the <b> tag should be used as a LAST resort
    //  when no other tag is more appropriate. The specification states that headings should be
    //  denoted with the <h1> to <h6> tags, emphasized text should be denoted with the <em> tag,
    //  important text should be denoted with the <strong> tag, and marked/highlighted text
    //  should be denoted with the <mark> tag.
    //  Tip: You can also use the following CSS to set bold text: "font-weight: bold;".
    */
    protected $name = 'b';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Only uses global attributes.
}