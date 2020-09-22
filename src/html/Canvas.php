<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Height, Width};
class Canvas extends HTMLElement {
    use EventAttributes;
    use Height;
    use Width;
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
    public const HEIGHT     = Attr::HEIGHT;
    public const WIDTH      = Attr::WIDTH;
    protected $name = 'canvas';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    public function attrHeight(int $height){
        $this->appendAttribut([Attr::HEIGHT => $height]);
    }
    public function attrWidth(int $width){
        $this->appendAttribut([Attr::WIDTH => $width]);
    }
    */
}
