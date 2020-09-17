<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Link extends HTMLElementEvent {
    public const CROSSORIGIN = 'crossorigin'; // Attr
    public const CROSSORIGIN_ANONYMOUS = 'anonymous'; // Value
    public const CROSSORIGIN_USE_CREDENTIALS = 'use-credentials'; // Value
    // public const HREF = 'href'; // Attr
    // public const HREFLANG = 'hreflang'; // Attr
    // public const MEDIA = 'media'; // Attr
    public const REFERRERPOLICY = 'referrerpolicy'; // Attr
    public const REFERRERPOLICY_NO_REFERRER = 'no-referrer'; // Value
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade'; // Value
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin'; // Value
    public const REFERRERPOLICY_ORIGIN = 'origin'; // Value
    public const REFERRERPOLICY_UNSAVE_URL = 'unsave-url'; // Value
    // public const REL = 'rel'; // Attr
    public const REL_ALTERNATE = 'alternate'; // Value
    public const REL_AUTHOR = 'author'; // Value
    public const REL_DNS_PREFETCH = 'dns-prefetch'; // Value
    public const REL_HELP = 'help'; // Value
    public const REL_ICON = 'icon'; // Value
    public const REL_LICENSE = 'license'; // Value
    public const REL_NEXT = 'next'; // Value
    public const REL_PINGBACK = 'pingback'; // Value
    public const REL_PRECONNECT = 'preconnect'; // Value
    public const REL_PREFETCH = 'prefetch'; // Value
    public const REL_PRELOAD = 'preload'; // Value
    public const REL_PRERENDER = 'prerender'; // Value
    public const REL_PREV = 'prev'; // Value
    public const REL_SEARCH = 'search'; // Value
    public const REL_STYLESHEET = 'stylesheet'; // Value
    // public const SIZES = 'sizes'; // Attr
    // public const TITLE = 'title'; // Attr
    // public const TYPE = 'type'; // Attr
    public const TYPE_TEXT_CSS = 'text/css'; // Value
    protected $name = 'link';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrCrossorigin(string $value) {
        //	crossorigin
        //		Specifies how the element handles cross-origin requests
        //	    anonymous
        //		use-credentials
        $this->appendAttribut([self::CROSSORIGIN => $value]);
    }
    /*
    public function attrCrossoriginAnonymous(){
        $this->attrCrossorigin(Link::ANONYMOUS);
    }
    public function attrCrossoriginCredentials(){
        $this->attrCrossorigin(Link::USE_CREDENTIALS);
    }
    */
    public function attrHref(string $url) {
        //	href
        //		Specifies the location of the linked document
        //	    URL
        $this->appendAttribut([self::HREF => $url]);
    }
    public function attrHreflang(string $hreflang) {
        //	hreflang
        //		Specifies the language of the text in the linked document
        //	    language_code
        $this->appendAttribut([self::HREFLANG => $hreflang]);
    }
    public function attrMedia(string $media) {
        //	media
        //		Specifies on what device the linked document will be displayed
        //	    media_query
        $this->appendAttribut([self::MEDIA => $media]);
    }	
    public function attrReferrerpolicy(string $referrerpolicy) {
        //	referrerpolicy
        //		Specifies which referrer to use when fetching the resource
        //	    media_query
        //          no-referrer
        //          no-referrer-when-downgrade
        //          origin
        //          origin-when-cross-origin
        //          unsafe-url	
        $this->appendAttribut([self::REFERRERPOLICY => $referrerpolicy]);
    }
    /*
    public function attrReferrerpolicyNo(){
        $this->attrReferrerpolicy(Link::NO_REFERRER);
    }
    public function attrReferrerpolicyNoDowngrade(){
        $this->attrReferrerpolicy(Link::NO_REFERRER_WHEN_DOWNGRADE);
    }
    public function attrReferrerpolicyOrigin(){
        $this->attrReferrerpolicy(Link::ORIGIN);
    }
    public function attrReferrerpolicyOriginCross(){
        $this->attrReferrerpolicy(Link::ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function attrReferrerpolicyUnsafe(){
        $this->attrReferrerpolicy(Link::UNSAVE_URL);
    }
    */	
    public function attrRel(string $relation) {
        //	rel
        //		Required. Specifies the relationship between the current document and the linked document
        //	    media_query
        //  	    alternate
        //          author
        //          dns-prefetch
        //          help
        //          icon
        //          license
        //          next
        //          pingback
        //          preconnect
        //          prefetch
        //          preload
        //          prerender
        //          prev
        //          search
        //          stylesheet
        $this->appendAttribut([self::REL => $relation]);
    }
    public function attrSizes(string $sizes) {
        //	sizes
        //		Specifies the size of the linked resource. Only for rel="icon"
        //	    sizes
        //          HeightxWidth
        //          any
        $this->appendAttribut([self::SIZES => $sizes]);
    }
    public function attrTitle(string $title) {
        //	title
        //		Required. Specifies the relationship between the current document and the linked document
        //	    media_query
        $this->appendAttribut([self::TITLE => $title]);
    }
    public function attrType(string $type) {
        //	type
        //		Required. Specifies the relationship between the current document and the linked document
        //	    media_query
        $this->appendAttribut([self::TYPE => $type]);
    }

    public function includeCSS(string $filepath){
        $this->attrRel(self::REL_STYLESHEET);
        $this->attrType(self::TYPE_TEXT_CSS);
        $this->attrHref($filepath);
    }
}