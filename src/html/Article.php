<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Article extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
Definition and Usage
The <article> tag specifies independent, self-contained content.

An article should make sense on its own and it should be possible to distribute it independently from the rest of the site.

Potential sources for the <article> element:

Forum post
Blog post
News story
Note: The <article> element does not render as anything special in a browser. However, you can use CSS to style the <article> element (see example below).

Browser Support
The numbers in the table specify the first browser version that fully supports the element.

Element					
<article>	6.0	9.0	4.0	5.0	11.1
Global Attributes
The <article> tag also supports the Global Attributes in HTML.

Event Attributes
The <article> tag also supports the Event Attributes in HTML.
    */
    protected $name = 'article';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}