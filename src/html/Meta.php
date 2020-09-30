<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{Attr};
use tekki\core\html\attr\{Charset, Content, HttpEquiv, Name};
class Meta extends HTMLElement {
    use Charset;
    use Content;
    use HttpEquiv;
    use Name;
    public const CHARSET                                = Attr::CHARSET;
    public const CHARSET_UTF_8                          = Attr::CHARSET_UTF_8;
    public const CONTENT                                = Attr::CONTENT;
    public const HTTP_EQUIV                             = Attr::HTTP_EQUIV;
    public const HTTP_EQUIV_CONTENT_SECURITY_POLICY     = Attr::HTTP_EQUIV_CONTENT_SECURITY_POLICY;
    public const HTTP_EQUIV_CONTENT_TYPE                = Attr::HTTP_EQUIV_CONTENT_TYPE;
    public const HTTP_EQUIV_DEFAULT_STYLE               = Attr::HTTP_EQUIV_DEFAULT_STYLE;
    public const HTTP_EQUIV_REFRESH                     = Attr::HTTP_EQUIV_REFRESH;
    public const NAME                                   = Attr::NAME;
    public const NAME_APPLICATION_NAME                  = Attr::NAME_APPLICATION_NAME;
    public const NAME_AUTHOR                            = Attr::NAME_APPLICATION_NAME;
    public const NAME_DESCRIPTION                       = Attr::NAME_DESCRIPTION;
    public const NAME_GENERATOR                         = Attr::NAME_GENERATOR;
    public const NAME_KEYWORDS                          = Attr::NAME_KEYWORDS;
    public const NAME_VIEWPORT                          = Attr::NAME_VIEWPORT;
    protected $name = 'meta';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    // Most HTML elements have a start tag and an end tag that indicate where the element begins and where it ends.
    // There is a group of elements that are exceptions to this rule.
    // These elements are called empty or void and only have a start tag since they can't have any content.
    // They must not have an end tag in HTML.
    // The void elements in HTML 4.01/XHTML 1.0 Strict are area, base, br, col, hr, img, input, link, meta, and param.
    // HTML5 currently adds command, keygen, and source to that list.
    */

    // The <meta> tag DON'T supports the Event Attributes.
/*
    // The <meta> tag also supports the Global Attributes in HTML.
    public function attrCharset(string $charset = self::UTF_8) {
        //	charset
        //		Specifies the character encoding for the HTML document
        //	    character_set
        $this->appendAttribut([self::CHARSET => $charset]);
    }
    */
    
    public function charset(string $charset = self::CHARSET_UTF_8){
        $this->setCharset($charset);
    }
    
    /*
    //  content         text                        Specifies the value associated with the http-equiv or name attribute
    public function attrContent(string $content) {
        //	content
        //		Specifies the value associated with the http-equiv or name attribute
        //	    text
        $this->appendAttribut([self::CONTENT => $content]);
    }
    */
    /*
    //  http-equiv      content-security-policy     Provides an HTTP header for the information/value of the content attribute
    //                  content-type
    //                  default-style
    //                  refresh	
    public function attrHttpEquiv(string $content) {
        //	http-equiv
        //		Provides an HTTP header for the information/value of the content attribute
        //	    text
        $this->appendAttribut([self::HTTP_EQUIV => $content]);
    }
    */
    //  name            application-name            Specifies a name for the metadata
    //                  author
    //                  description
    //                  generator
    //                  keywords
    //                  viewport
    /*
    public function attrName(string $name) {
        //	name
        //		Specifies a name for the metadata
        //	    name
        $this->appendAttribut([self::NAME => $name]);
    }
    */
    public function applicationName(string $name) {
        $this->setName(self::NAME_APPLICATION_NAME);
        $this->setContent($name);
    }
    //  Define the author of a page:

	public function author(string $name) {
        //  <meta name="author" content="John Doe">
        $this->setName(self::NAME_AUTHOR);
        $this->setContent($name);
	}   

    
    //  Define a description of your web page:
    //  <meta name="description" content="Free Web tutorials for HTML and CSS">
    public function description(string $description) {
        $this->setName(self::NAME_DESCRIPTION);
        $this->setContent($description);
    }
    public function generator(string $generator) {
        $this->setName(self::NAME_GENERATOR);
        $this->setContent($generator);
    }
    //  More Examples
    //  Define keywords for search engines:
    //  <meta name="keywords" content="HTML, CSS, JavaScript">
    public function keywords(string $keywords) {
        $this->setName(self::NAME_KEYWORDS);
        $this->setContent($keywords);
    }

    //  Refresh document every 30 seconds.
    //  <meta http-equiv="refresh" content="30">
    //  Setting the viewport to make your website look good on all devices:

    //  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    //  Setting the Viewport
    //  The viewport is the user's visible area of a web page. It varies with the device - it will be smaller on a mobile phone than on a computer screen.
    //  You should include the following <meta> element in all your web pages:
    //  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    //  This gives the browser instructions on how to control the page's dimensions and scaling.
    //  The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    //  The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.
    public function viewport($viewport = 'width=device-width, initial-scale=1'){
        $this->setName(self::NAME_VIEWPORT);
        $this->setContent($viewport);
    }
}