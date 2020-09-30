<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
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
    //use tekki\core\page\html\attr\{Alt, Crossorigin, Height, Ismap, Longdesc, Referrerpolicy, Sizes, Src, Srcset, Usemap, Width};
    /*
    alt	text	Specifies an alternate text for an image
    crossorigin	anonymous
    use-credentials	Allow images from third-party sites that allow cross-origin access to be used with canvas
    height	pixels	Specifies the height of an image
    ismap	ismap	Specifies an image as a server-side image map
    longdesc	URL	Specifies a URL to a detailed description of an image
    referrerpolicy	no-referrer
    no-referrer-when-downgrade
    origin
    origin-when-cross-origin
    unsafe-url	Specifies which referrer to use when fetching the image
    sizes	sizes	Specifies image sizes for different page layouts
    src	URL	Specifies the path to the image
    srcset	URL-list	Specifies a list of image files to use in different situations
    usemap	#mapname	Specifies an image as a client-side image map
    width	pixels	Specifies the width of an image
*/
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
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
