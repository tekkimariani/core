<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes};
class Address extends HTMLElement {
    use EventAttributes;
    // Only uses global attributes.
    /*
    The <address> tag defines the contact information 
    for the author/owner of a document or an article.

    The contact information can be an email address, URL, 
    physical address, phone number, social media handle, etc.

    The text in the <address> element usually renders in italic,
    and browsers will always add a line break before and after the <address> element.
    */
    protected $name = 'address';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}