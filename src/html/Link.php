<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
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
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function includeCSS(string $filepath){
        $this->setRel(self::REL_STYLESHEET);
        $this->setType(self::TYPE_TEXT_CSS);
        $this->setHref($filepath);
        return $this;
    }
}