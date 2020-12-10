<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Cite extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  The <cite> tag defines the title of a creative work (e.g. a book, a poem, a song, a movie, a painting, a sculpture, etc.).
    //  Note: A person's name is not the title of a work.
    //  The text in the <cite> element usually renders in italic.
    */
    protected $name = 'cite';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
