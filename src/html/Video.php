<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr, Content};
use tekki\core\html\attr\{Autoplay, Controls, Height, Loop, Muted, Poster, Preload, Src, Width};
class Video extends HTMLElement {
    use EventAttributes;
    use Autoplay;
    use Controls;
    use Height;
    use Loop;
    use Muted;
    use Poster;
    use Preload;
    use Src;
    use Width;
    public const AUTOPLAY           = Attr::AUTOPLAY;
    public const CONTROLS           = Attr::CONTROLS;
    public const HEIGHT             = Attr::HEIGHT;
    public const LOOP               = Attr::LOOP;
    public const MUTED              = Attr::MUTED;
    public const POSTER             = Attr::POSTER;
    public const PRELOAD            = Attr::PRELOAD;
    public const PRELOAD_AUTO       = Attr::PRELOAD_AUTO;
    public const PRELOAD_METADATA   = Attr::PRELOAD_METADATA;
    public const PRELOAD_NONE       = Attr::PRELOAD_NONE;
    public const SRC                = Attr::SRC;
    public const WIDTH              = Attr::WIDTH;
    protected $name = 'video';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
