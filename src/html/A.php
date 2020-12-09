<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
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
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}