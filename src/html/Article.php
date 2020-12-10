<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Article extends HTMLElement {
    use EventAttributes;
    /*
        Definition and Usage
        The <article> tag specifies independent, self-contained content.
        An article should make sense on its own and it should be possible to distribute it independently from the rest of the site.
        Potential sources for the <article> element:
        Forum post
        Blog post
        News story
        Note: The <article> element does not render as anything special in a browser.
    */
    protected $name = 'article';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}