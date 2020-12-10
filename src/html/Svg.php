<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{Attr};
use tekki\core\html\attr\{Height, Width};
class Svg extends HTMLElement {
    use Height;
    use Width;
    public const HEIGHT = Attr::HEIGHT;
    public const WIDTH = Attr::WIDTH;
    protected $name = 'svg';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}