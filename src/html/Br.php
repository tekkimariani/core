<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Br extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    //  The <br> tag inserts a single line break.
    //
    //  The <br> tag is useful for writing addresses or poems.
    //
    //  The <br> tag is an empty tag which means that it has no end tag.
    // Most HTML elements have a start tag and an end tag that indicate where the element begins and where it ends.
    // There is a group of elements that are exceptions to this rule.
    // These elements are called empty or void and only have a start tag since they can't have any content.
    // They must not have an end tag in HTML.
    // The void elements in HTML 4.01/XHTML 1.0 Strict are area, base, br, col, hr, img, input, link, meta, and param.
    // HTML5 currently adds command, keygen, and source to that list.
    */
    protected $name = 'br';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        // $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }

    // Couldn't uses elements as value.
    // Couldn't uses text as value.
}