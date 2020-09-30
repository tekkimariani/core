<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Media, Sizes, Src, Srcset, Type};
class Source extends HTMLElement {
    use EventAttributes;
    use Media;
    use Sizes;
    use Src;
    use Srcset;
    use Type;
    public const MEDIA      = Attr::MEDIA;
    public const SIZES      = Attr::SIZES;
    public const SRC        = Attr::SRC;
    public const SRCSET     = Attr::SRCSET;
    public const TYPE       = Attr::TYPE;
    protected $name = 'source';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
