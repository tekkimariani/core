<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Blockquote extends HTMLElementEvent {
    /*
    // The <blockquote> tag specifies a section that is quoted from another source.
    */
    public const CITE = parent::CITE;
    protected $name = 'blockquote';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrCite($url){
        $this->appendAttribut([self::CITE => $url]);
    }
}