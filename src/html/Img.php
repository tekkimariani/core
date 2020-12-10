<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Alt, Crossorigin, Height, Ismap, Longdesc, Referrerpolicy, Sizes, Src, Srcset, Usemap, Width};
class Img extends HTMLElement {
    use EventAttributes;
    use Alt;
    use Crossorigin;
    use Height;
    use Ismap;
    use Longdesc;
    use Referrerpolicy;
    use Sizes;
    use Src;
    use Srcset;
    use Usemap;
    use Width;
    public const ALT = Attr::ALT;
    public const CROSSORIGIN = Attr::CROSSORIGIN;
    public const CROSSORIGIN_ANONYMOUS = Attr::CROSSORIGIN_ANONYMOUS;
    public const CROSSORIGIN_USE_CREDENTIALS = Attr::CROSSORIGIN_USE_CREDENTIALS;
    public const HEIGHT = Attr::HEIGHT;
    public const ISMAP = Attr::ISMAP;
    public const LONGDESC = Attr::LONGDESC;
    public const REFERRERPOLICY = Attr::REFERRERPOLICY;
    public const REFERRERPOLICY_NO_REFERRER = Attr::REFERRERPOLICY_NO_REFERRER;
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE;
    public const REFERRERPOLICY_ORIGIN = Attr::REFERRERPOLICY_ORIGIN;
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_UNSAFE_URL = Attr::REFERRERPOLICY_UNSAFE_URL;
    public const SIZES = Attr::SIZES;
    public const SRC = Attr::SRC;
    public const SRCSET = Attr::SRCSET;
    public const USEMAP = Attr::USEMAP;
    public const WIDTH = Attr::WIDTH;
    protected $name = 'img';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
