<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Crossorigin, Href, Hreflang, Media, Referrerpolicy, Rel, Sizes, Title, Type};
class Link extends HTMLElement {
    use EventAttributes;
    use Crossorigin;
    use Href;
    use Hreflang;
    use Media;
    use Referrerpolicy;
    use Rel;
    use Sizes;
    use Title;
    use Type;
    public const CROSSORIGIN = Attr::CROSSORIGIN;
    public const CROSSORIGIN_ANONYMOUS = Attr::CROSSORIGIN_ANONYMOUS;
    public const CROSSORIGIN_USE_CREDENTIALS = Attr::CROSSORIGIN_USE_CREDENTIALS;
    public const HREF = Attr::HREF;
    public const HREFLANG = Attr::HREFLANG;
    public const MEDIA = Attr::MEDIA;
    public const REFERRERPOLICY = Attr::REFERRERPOLICY;
    public const REFERRERPOLICY_NO_REFERRER = Attr::REFERRERPOLICY_NO_REFERRER;
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE;
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN =Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_ORIGIN = Attr::REFERRERPOLICY_ORIGIN;
    public const REFERRERPOLICY_UNSAVE_URL = Attr::REFERRERPOLICY_UNSAFE_URL;
    public const REL = Attr::REL;
    public const REL_ALTERNATE = Attr::REL_ALTERNATE;
    public const REL_AUTHOR = Attr::REL_AUTHOR;
    public const REL_DNS_PREFETCH = Attr::REL_DNS_PREFETCH;
    public const REL_HELP = Attr::REL_HELP;
    public const REL_ICON = Attr::REL_ICON;
    public const REL_LICENSE = Attr::REL_LICENSE;
    public const REL_NEXT = Attr::REL_NEXT;
    public const REL_PINGBACK = Attr::REL_PINGBACK;
    public const REL_PRECONNECT = Attr::REL_PRECONNECT;
    public const REL_PREFETCH = Attr::REL_PREFETCH;
    public const REL_PRELOAD = Attr::REL_PRELOAD;
    public const REL_PRERENDER = Attr::REL_PRERENDER;
    public const REL_PREV = Attr::REL_PREV;
    public const REL_SEARCH = Attr::REL_SEARCH;
    public const REL_STYLESHEET = Attr::REL_STYLESHEET;
    public const SIZES = Attr::SIZES;
    public const TITLE = Attr::TITLE;
    public const TYPE = Attr::TYPE;
    public const TYPE_TEXT_CSS = Attr::TYPE_TEXT_CSS;
    protected $name = 'link';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    public function attrCrossorigin(string $value) {
        //	crossorigin
        //		Specifies how the element handles cross-origin requests
        //	    anonymous
        //		use-credentials
        $this->appendAttribut([self::CROSSORIGIN => $value]);
    }
    */
    /*
    public function attrCrossoriginAnonymous(){
        $this->attrCrossorigin(Link::ANONYMOUS);
    }
    public function attrCrossoriginCredentials(){
        $this->attrCrossorigin(Link::USE_CREDENTIALS);
    }
    */
    /*
    public function attrHref(string $url) {
        //	href
        //		Specifies the location of the linked document
        //	    URL
        $this->appendAttribut([self::HREF => $url]);
    }
    */
    /*
    public function attrHreflang(string $hreflang) {
        //	hreflang
        //		Specifies the language of the text in the linked document
        //	    language_code
        $this->appendAttribut([self::HREFLANG => $hreflang]);
    }
    */
    /*
    public function attrMedia(string $media) {
        //	media
        //		Specifies on what device the linked document will be displayed
        //	    media_query
        $this->appendAttribut([self::MEDIA => $media]);
    }
    */
    /*	
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
    */
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
    /*	
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
    */
    /*
    public function attrSizes(string $sizes) {
        //	sizes
        //		Specifies the size of the linked resource. Only for rel="icon"
        //	    sizes
        //          HeightxWidth
        //          any
        $this->appendAttribut([self::SIZES => $sizes]);
    }
    */
    /*
    public function attrTitle(string $title) {
        //	title
        //		Required. Specifies the relationship between the current document and the linked document
        //	    media_query
        $this->appendAttribut([self::TITLE => $title]);
    }
    */
    /*
    public function attrType(string $type) {
        //	type
        //		Required. Specifies the relationship between the current document and the linked document
        //	    media_query
        $this->appendAttribut([self::TYPE => $type]);
    }
    */
    
    public function includeCSS(string $filepath){
        $this->setRel(self::REL_STYLESHEET);
        $this->setType(self::TYPE_TEXT_CSS);
        $this->setHref($filepath);
    }
    
}