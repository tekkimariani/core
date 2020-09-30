<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
class Head extends HTMLElement {
    protected $name = 'head';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(false);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    // Tags that can be within <head>
    public function title(string $content=null){
        $this->console->log(__METHOD__);
        return new Title($this->doc, $this->element, [], $content);
    }
    /*
    //style
    //  this element is anyway in the all-tags-everywhere-section
    public function style(array $attr=[], string $content = null){
        $this->console->log(__METHOD__);
        return new Style($this->doc, $this->element, [], $content);
    }
    */
    //base
    public function base(array $attr=[]){
        $this->console->log(__METHOD__);
        $base =  new Base($this->doc, $this->element, $attr);
    }
    //link
    public function link(array $attr=[]){
        $this->console->log(__METHOD__);
        return new Link($this->doc, $this->element, $attr);
    }
    //meta
    public function meta(array $attr=[]){
        $this->console->log(__METHOD__);
        return new Meta($this->doc, $this->element, $attr);
    }
    //script
    public function script(array $attr=[], string $content=null){
        $this->console->log(__METHOD__);
        return new Script($this->doc, $this->element, [], $content);
    }
    //noscript
    public function noscript(array $attr=[], string $content=null){
        $this->console->log(__METHOD__);
        return new Noscript($this->doc, $this->element, [], $content);
    }

    /*
        Definition and Usage
            The <head> element is a container for metadata (data about data) and is placed between the <html> tag and the <body> tag.

            Metadata is data about the HTML document. Metadata is not displayed.

            Metadata typically define the document title, character set, styles, scripts, and other meta information.

            The following elements can go inside the <head> element:

            <title> (required in every HTML document)
            <style>
            <base>
            <link>
            <meta>
            <script>
            <noscript>
    */
    
    public function includeCSS(string $filepath){
        return $this->link()->includeCSS($filepath);
    }
    
    public function includeJS(string $filepath, string $mode = null){
        return $this->script()->includeJS($filepath, $mode);
    }
    
}