<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Abbr extends HTMLElement {
    use EventAttributes;
    // Only uses title as attribute, which one is an global attribute.
    /*
    The <abbr> tag defines an abbreviation or an acronym, like "HTML", "CSS", "Mr.", "Dr.", "ASAP", "ATM".
    Tip: Use the global title attribute to show the description for the abbreviation/acronym when you mouse over the element.
    */
    protected $name = 'abbr';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }  
    /*
    public function attrTitle($title){
        $this->appendAttribut([self::TITLE => $title]);
    }
    */
}