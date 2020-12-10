<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{Attr};
use tekki\core\html\attr\{Async, Charset, Defer, Src, Type};
class Script extends HTMLElement {
    use Async;
    use Charset;
    use Defer;
    use Src;
    use Type;
    public const ASYNC                = Attr::ASYNC;
    public const CHARSET              = Attr::CHARSET;
    public const DEFER                = Attr::DEFER;
    public const SRC                  = Attr::SRC;
    public const TYPE                 = Attr::TYPE;
    public const TYPE_TEXT_JAVASCRIPT = Attr::TYPE_TEXT_JAVASCRIPT;
    protected $name = 'script';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function includeJS(string $filepath, string $mode = null){
        // @param string|null $mode = 'async'|'defer'
        $attr = [];
        $attr[Script::SRC] = $filepath;
        if($mode == 'async'){
            $attr[Script::ASYNC] = 'true';
        }elseif($mode == 'defer'){
            $attr[Script::DEFER] = 'true';
        }
        $this->appendAttribut($attr);
        return $this;
    }
}