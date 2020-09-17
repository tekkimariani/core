<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Canvas extends HTMLElementEvent {
    /*
    //  The <canvas> tag is used to draw graphics, on the fly, via scripting (usually JavaScript).
    //
    //  The <canvas> tag is transparent, and is only a container for graphics, you must use a script to actually draw the graphics.
    //
    //  Any text inside the <canvas> element will be displayed in browsers with JavaScript disabled and in browsers that do not support <canvas>.
    */
    /*
    //  height	pixels	Specifies the height of the canvas. Default value is 150
    //  width	pixels	Specifies the width of the canvas Default value is 300
    */
    public const HEIGHT = parent::HEIGHT;
    public const WIDTH = parent::WIDTH;
    protected $name = 'canvas';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrHeight(int $height){
        $this->appendAttribut([self::VALUE => $height]);
    }
    public function attrValue(int $width){
        $this->appendAttribut([self::VALUE => $width]);
    }
}
