<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class A extends HTMLElementEvent {
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
    public const DOWNLOAD = parent::DOWNLOAD;
    public const HREF = parent::HREF;
    public const HREFLANG = parent::HREFLANG;
    public const MEDIA = parent::MEDIA;
    public const PING = parent::PING;
    public const REFERRERPOLICY = parent::REFERRERPOLICY;
    public const REFERRERPOLICY_NO_REFERRER = parent::REFERRERPOLICY_NO_REFERRER;
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = parent::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE;
    public const REFERRERPOLICY_ORIGIN = parent::REFERRERPOLICY_ORIGIN;
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = parent::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_UNSAFE_URL = parent::REFERRERPOLICY_UNSAFE_URL;
    public const REL = parent::REL;
    public const REL_ALTERNATE = parent::REL_ALTERNATE;
    public const REL_AUTHOR = parent::REL_AUTHOR;
    public const REL_BOOKMARK = parent::REL_BOOKMARK;
    public const REL_EXTERNAL = parent::REL_EXTERNAL;
    public const REL_HELP = parent::REL_HELP;
    public const REL_LICENSE = parent::REL_LICENSE;
    public const REL_NEXT = parent::REL_NEXT;
    public const REL_NOFOLLOW = parent::REL_NOFOLLOW;
    public const REL_NOOPENER = parent::REL_NOOPENER;
    public const REL_PREV = parent::REL_PREV;
    public const REL_SEARCH = parent::REL_SEARCH;
    public const REL_TAG = parent::REL_TAG;
    public const TARGET = parent::TARGET;
    public const TARGET_BLANK = parent::TARGET_BLANK;
    public const TARGET_PARENT = parent::TARGET_PARENT;
    public const TARGET_SELF = parent::TARGET_SELF;
    public const TARGET_TOP = parent::TARGET_TOP;
    public const TYPE = parent::TYPE;
    protected $name = 'a';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrDownload($filepath) {
        $this->appendAttribut([self::DOWNLOAD => $filepath]);
    }
    public function attrHref($url){
        $this->appendAttribut([self::HREF => $url]);
    }
    public function attrHreflang($languagecode){
        $this->appendAttribut([self::HREFLANG => $languagecode]);
    }
    public function attrMedia($media){
        $this->appendAttribut([self::MEDIA => $media]);
    }
    public function attrPing($urllist){
        $this->appendAttribut([self::PING => $urllist]);
    }
    public function attrReferrerpolicy($referrerpolicy){
        $this->appendAttribut([self::REFERRERPOLICY => $referrerpolicy]);
    }
    public function attrReferrerpolicyNoReferrer() {
        $this->attrRel(self::REFERRERPOLICY_NO_REFERRER);
    }
    public function attrReferrerpolicyNoReferrerWhenDowngrade() {
        $this->attrRel(self::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE);
    }
    public function attrReferrerpolicyOrigin() {
        $this->attrRel(self::REFERRERPOLICY_ORIGIN);
    }
    public function attrReferrerpolicyOriginWhenCrossOrigin() {
        $this->attrRel(self::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function attrReferrerpolicyUnsaveUrl() {
        $this->attrRel(self::REFERRERPOLICY_UNSAFE_URL);
    }
    public function attrRel(string $rel){
        $this->appendAttribut([self::REL => $rel]);
    }
    public function attrRelAlternate() {
        $this->attrRel(self::REL_ALTERNATE);
    }
    public function attrRelAuthor() {
        $this->attrRel(self::REL_AUTHOR);
    }
    public function attrRelBookmark() {
        $this->attrRel(self::REL_BOOKMARK);
    }
    public function attrRelExternal() {
        $this->attrRel(self::REL_EXTERNAL);
    }
    public function attrRelHelp() {
        $this->attrRel(self::REL_HELP);
    }
    public function attrRelLicense() {
        $this->attrRel(self::REL_LICENSE);
    }
    public function attrRelNext() {
        $this->attrRel(self::REL_NEXT);
    }
    public function attrRelNofollow() {
        $this->attrRel(self::REL_NOFOLLOW);
    }
    public function attrRelNoreferrer() {
        $this->attrRel(self::REL_NOREFERRER);
    }    
    public function attrRelNoopener() {
        $this->attrRel(self::REL_NOOPENER);
    }
    public function attrRelPrev() {
        $this->attrRel(self::REL_PREV);
    }
    public function attrRelSearch() {
        $this->attrRel(self::REL_SEARCH);
    }
    public function attrRelTag() {
        $this->attrRel(self::REL_TAG);
    }
    public function attrTarget(string $target){
        $this->appendAttribut([self::TARGET => $target]);
    }
    public function attrTargetBlank() {
        $this->attrTarget(self::TARGET_BLANK);
    }
    public function attrTargetParent() {
        $this->attrTarget(self::TARGET_PARENT);
    }
    public function attrTargetSelf() {
        $this->attrTarget(self::TARGET_SELF);
    }
    public function attrTargetTop() {
        $this->attrTarget(self::TARGET_TOP);
    }
    public function attrType($type){
        $this->appendAttribut([self::TYPE => $type]);
    }   
}