<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{GlobalAttributes, EventAttributes, Attr};
use tekki\core\html\attr\{Autoplay, Controls, Loop, Muted, Preload, Src};
class Audio extends HTMLElement {
    use GlobalAttributes;
    use EventAttributes;
    use Autoplay;
    use Controls;
    use Loop;
    use Muted;
    use Preload;
    use Src;
    public const AUTOPLAY           = Attr::AUTOPLAY;
    public const CONTROLS           = Attr::CONTROLS;
    public const LOOP               = Attr::LOOP;
    public const MUTED              = Attr::MUTED;
    public const PRELOAD            = Attr::PRELOAD;
    public const PRELOAD_AUTO       = Attr::PRELOAD_AUTO;
    public const PRELOAD_METADATA   = Attr::PRELOAD_METADATA;
    public const PRELOAD_NONE       = Attr::PRELOAD_NONE;
    public const SRC                = Attr::SRC;
    protected $name = 'audio';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}