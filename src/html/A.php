<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Download, Href, Hreflang, Media, Ping, Referrerpolicy, Rel, Target, Type};
class A extends HTMLElement {
    use EventAttributes;
    use Download;
    use Href;
    use Hreflang;
    use Media;
    use Ping;
    use Referrerpolicy;
    use Rel;
    use Target;
    use Type;
    /*
    //  I love to test this things!
    */
    /*
    //  The <a> tag defines a hyperlink, which is used to link from one page to another.
    //
    //  The most important attribute of the <a> element is the href attribute, which indicates the link's destination.
    //
    //  By default, links will appear as follows in all browsers:
    //
    //  An unvisited link is underlined and blue
    //  A visited link is underlined and purple
    //  An active link is underlined and red
    */
    /*
    //  https://www.w3schools.com/tags/tag_a.asp
    //  Living Standard: https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-a-element
    //  HTML5  Standard: https://www.w3.org/TR/html50/text-level-semantics.html#the-a-element
    */
    /*
Attribute	Value	Description
download	filename	Specifies that the target will be downloaded when a user clicks on the hyperlink
href	URL	Specifies the URL of the page the link goes to
hreflang	language_code	Specifies the language of the linked document
media	media_query	Specifies what media/device the linked document is optimized for
ping	list_of_URLs	Specifies a space-separated list of URLs to which, when the link is followed, post requests with the body ping will be sent by the browser (in the background). Typically used for tracking.
referrerpolicy	no-referrer
no-referrer-when-downgrade
origin
origin-when-cross-origin
unsafe-url	Specifies which referrer to send
rel	alternate
author
bookmark
external
help
license
next
nofollow
noreferrer
noopener
prev
search
tag	Specifies the relationship between the current document and the linked document
target	_blank
_parent
_self
_top	Specifies where to open the linked document
public const TARGET_BLANK = '_blank';
type	media_type	Specifies the media type of the linked document
    */
    public const DOWNLOAD                                   = Attr::DOWNLOAD;
    public const HREF                                       = Attr::HREF;
    public const HREFLANG                                   = Attr::HREFLANG;
    public const MEDIA                                      = Attr::MEDIA;
    public const PING                                       = Attr::PING;
    public const REFERRERPOLICY                             = Attr::REFERRERPOLICY;
    public const REFERRERPOLICY_NO_REFERRER                 = Attr::REFERRERPOLICY_NO_REFERRER;
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE  = Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE;
    public const REFERRERPOLICY_ORIGIN                      = Attr::REFERRERPOLICY_ORIGIN;
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN    = Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_UNSAFE_URL                  = Attr::REFERRERPOLICY_UNSAFE_URL;
    public const REL                                        = Attr::REL;
    public const REL_ALTERNATE                              = Attr::REL_ALTERNATE;
    public const REL_AUTHOR                                 = Attr::REL_AUTHOR;
    public const REL_BOOKMARK                               = Attr::REL_BOOKMARK;
    public const REL_EXTERNAL                               = Attr::REL_EXTERNAL;
    public const REL_HELP                                   = Attr::REL_HELP;
    public const REL_LICENSE                                = Attr::REL_LICENSE;
    public const REL_NEXT                                   = Attr::REL_NEXT;
    public const REL_NOFOLLOW                               = Attr::REL_NOFOLLOW;
    public const REL_NOOPENER                               = Attr::REL_NOOPENER;
    public const REL_PREV                                   = Attr::REL_PREV;
    public const REL_SEARCH                                 = Attr::REL_SEARCH;
    public const REL_TAG                                    = Attr::REL_TAG;
    public const TARGET                                     = Attr::TARGET;
    public const TARGET_BLANK                               = Attr::TARGET_BLANK;
    public const TARGET_PARENT                              = Attr::TARGET_PARENT;
    public const TARGET_SELF                                = Attr::TARGET_SELF;
    public const TARGET_TOP                                 = Attr::TARGET_TOP;
    public const TYPE                                       = Attr::TYPE;
    protected $name = 'a';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        // $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    /*
    public function attrDownload($filepath) {
        $this->appendAttribut([Attr::DOWNLOAD => $filepath]);
    }
    */
    /*
    public function attrHref($url){
        $this->appendAttribut([Attr::HREF => $url]);
    }
    */
    /*
    public function attrHreflang($languagecode){
        $this->appendAttribut([Attr::HREFLANG => $languagecode]);
    }
    */
    /*
    public function attrMedia($media){
        $this->appendAttribut([Attr::MEDIA => $media]);
    }
    */
    /*
    public function attrPing($urllist){
        $this->appendAttribut([Attr::PING => $urllist]);
    }
    */
    /*
    public function attrReferrerpolicy($referrerpolicy){
        $this->appendAttribut([Attr::REFERRERPOLICY => $referrerpolicy]);
    }
    public function attrReferrerpolicyNoReferrer() {
        $this->attrRel(Attr::REFERRERPOLICY_NO_REFERRER);
    }
    public function attrReferrerpolicyNoReferrerWhenDowngrade() {
        $this->attrRel(Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE);
    }
    public function attrReferrerpolicyOrigin() {
        $this->attrRel(Attr::REFERRERPOLICY_ORIGIN);
    }
    public function attrReferrerpolicyOriginWhenCrossOrigin() {
        $this->attrRel(Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function attrReferrerpolicyUnsaveUrl() {
        $this->attrRel(Attr::REFERRERPOLICY_UNSAFE_URL);
    }
    */
    /*
    public function attrRel(string $rel){
        $this->appendAttribut([Attr::REL => $rel]);
    }
    public function attrRelAlternate() {
        $this->attrRel(Attr::REL_ALTERNATE);
    }
    public function attrRelAuthor() {
        $this->attrRel(Attr::REL_AUTHOR);
    }
    public function attrRelBookmark() {
        $this->attrRel(Attr::REL_BOOKMARK);
    }
    public function attrRelExternal() {
        $this->attrRel(Attr::REL_EXTERNAL);
    }
    public function attrRelHelp() {
        $this->attrRel(Attr::REL_HELP);
    }
    public function attrRelLicense() {
        $this->attrRel(Attr::REL_LICENSE);
    }
    public function attrRelNext() {
        $this->attrRel(Attr::REL_NEXT);
    }
    public function attrRelNofollow() {
        $this->attrRel(Attr::REL_NOFOLLOW);
    }
    public function attrRelNoreferrer() {
        $this->attrRel(Attr::REL_NOREFERRER);
    }    
    public function attrRelNoopener() {
        $this->attrRel(Attr::REL_NOOPENER);
    }
    public function attrRelPrev() {
        $this->attrRel(Attr::REL_PREV);
    }
    public function attrRelSearch() {
        $this->attrRel(Attr::REL_SEARCH);
    }
    public function attrRelTag() {
        $this->attrRel(Attr::REL_TAG);
    }
    */
    /*
    public function attrTarget(string $target){
        $this->appendAttribut([Attr::TARGET => $target]);
    }
    public function attrTargetBlank() {
        $this->attrTarget(Attr::TARGET_BLANK);
    }
    public function attrTargetParent() {
        $this->attrTarget(Attr::TARGET_PARENT);
    }
    public function attrTargetSelf() {
        $this->attrTarget(Attr::TARGET_SELF);
    }
    public function attrTargetTop() {
        $this->attrTarget(Attr::TARGET_TOP);
    }
    */
    /*
    public function attrType($type){
        $this->appendAttribut([Attr::TYPE => $type]);
    }
    */ 
}