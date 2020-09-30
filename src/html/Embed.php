<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Height, Src, Type, Width};
class Embed extends HTMLElement {
    use EventAttributes;
    use Height;
    use Src;
    use Type;
    use Width;
    public const HEIGHT =           Attr::HEIGHT;
    public const SRC =              Attr::SRC;
    public const TYPE =             Attr::TYPE;
    public const TYPE_IMAGE_JPG =   Attr::TYPE_IMAGE_JPG;
    public const TYPE_TEXT_HTML =   Attr::TYPE_TEXT_HTML;
    public const TYPE_VIDEO_WEBM =  Attr::TYPE_VIDEO_WEBM;
    public const WIDTH =            Attr::WIDTH; 
    protected $name = 'embed';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
