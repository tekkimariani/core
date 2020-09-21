<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Audio extends HTMLElementEvent {
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
    public const AUTOPLAY = parent::AUTOPLAY;
    public const CONTROLS = parent::CONTROLS;
    public const LOOP = parent::LOOP;
    public const MUTED = parent::MUTED;
    public const PRELOAD = parent::PRELOAD;
    public const PRELOAD_AUTO = parent::PRELOAD_AUTO;
    public const PRELOAD_METADATA = parent::PRELOAD_METADATA;
    public const PRELOAD_NONE = parent::PRELOAD_NONE;
    public const SRC = parent::SRC;
    protected $name = 'audio';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrAutoplay(){
        $this->appendAttribut([self::AUTOPLAY => null]);
    }
    public function attrControls(){
        $this->appendAttribut([self::CONTROLS => null]);
    }
    public function attrLoop(){
        $this->appendAttribut([self::LOOP => null]);
    }
    public function attrMuted(){
        $this->appendAttribut([self::MUTED => null]);
    }
    public function attrPreload($value){
        $this->appendAttribut([self::PRELOAD => $value]);
    }
    public function attrPreloadAuto(){
        $this->attrPreload(self::PRELOAD_AUTO);
    }
    public function attrPreloadMetadata(){
        $this->attrPreload(self::PRELOAD_METADATA);
    }
    public function attrPreloadNone(){
        $this->attrPreload(self::PRELOAD_NONE);
    }
    public function attrSrc($url){
        $this->appendAttribut([self::SRC => $url]);
    }
}