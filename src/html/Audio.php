<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
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
    /*
    autoplay	autoplay	Specifies that the audio will start playing as soon as it is ready
    controls	controls	Specifies that audio controls should be displayed (such as a play/pause button etc)
    loop	loop	Specifies that the audio will start over again, every time it is finished
    muted	muted	Specifies that the audio output should be muted
    preload	auto
    metadata
    none	Specifies if and how the author thinks the audio should be loaded when the page loads
    src	URL	Specifies the URL of the audio file
    */
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
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    public function attrAutoplay(){
        $this->appendAttribut([Attr::AUTOPLAY => null]);
    }
    */
    /*
    public function attrControls(){
        $this->appendAttribut([Attr::CONTROLS => null]);
    }
    */
    /*
    public function attrLoop(){
        $this->appendAttribut([Attr::LOOP => null]);
    }
    */
    /*
    public function attrMuted(){
        $this->appendAttribut([Attr::MUTED => null]);
    }
    */
    /*
    public function attrPreload($value){
        $this->appendAttribut([Attr::PRELOAD => $value]);
    }
    public function attrPreloadAuto(){
        $this->attrPreload(Attr::PRELOAD_AUTO);
    }
    public function attrPreloadMetadata(){
        $this->attrPreload(Attr::PRELOAD_METADATA);
    }
    public function attrPreloadNone(){
        $this->attrPreload(Attr::PRELOAD_NONE);
    }
    */
    /*
    public function attrSrc($url){
        $this->appendAttribut([Attr::SRC => $url]);
    }
    */
}