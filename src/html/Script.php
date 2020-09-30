<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{Attr};
use tekki\core\html\attr\{Async, Charset, Defer, Src, Type};
class Script extends HTMLElement {
    use Async;
    use Charset;
    use Defer;
    use Src;
    use Type;
    public const ASYNC                  = Attr::ASYNC;
    public const CHARSET                = Attr::CHARSET;
    public const DEFER                  = Attr::DEFER;
    public const SRC                    = Attr::SRC;
    public const TYPE                   = Attr::TYPE;
    public const TYPE_TEXT_JAVASCRIPT   = Attr::TYPE_TEXT_JAVASCRIPT;
    protected $name = 'script';
    /*
    async	async	Specifies that the script is executed asynchronously (only for external scripts)
charset	charset	Specifies the character encoding used in an external script file
defer	defer	Specifies that the script is executed when the page has finished parsing (only for external scripts)
src	URL	Specifies the URL of an external script file
type	media_type	Specifies the media type of the script
    */
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    public function attrAsync(bool $async) {
        //	async
        //		Specifies that the script is executed asynchronously (only for external scripts)
        //	    bool
        $this->appendAttribut([self::ASYNC => $async]);
    }
    public function attrCharset(string $charset) {
        //	charset
        //		Specifies the character encoding used in an external script file
        //	    charset
        $this->appendAttribut([self::CHARSET => $charset]);
    }
    public function attrDefer(bool $defer) {
        //	defer
        //		Specifies that the script is executed when the page has finished parsing (only for external scripts)
        //      bool
        $this->appendAttribut([self::DEFER => $defer]);
    }
    public function attrSrc(string $url) {
        //	src
        //		Specifies the URL of an external script file
        //	    URL
        $this->appendAttribut([self::SRC => $url]);
    }
    public function attrType(string $type) {
        //	type
        //		Specifies the media type of the script
        //	    media_type
        $this->appendAttribut([self::TYPE => $type]);
    }
*/

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
    }
}