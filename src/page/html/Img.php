<?php
namespace tekki\core\page\html;
use tekki\core\php\DOMDocument;
use tekki\core\php\DOMElement;
use FirePHP;
class Img extends HTMLElementEvent {
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
    public const ALT = parent::ALT;
    public const CROSSORIGIN = parent::CROSSORIGIN;
    public const CROSSORIGIN_ANONYMOUS = parent::CROSSORIGIN_ANONYMOUS;
    public const CROSSORIGIN_USE_CREDENTIALS = parent::CROSSORIGIN_USE_CREDENTIALS;
    public const HEIGHT = parent::HEIGHT;
    public const ISMAP = parent::ISMAP;
    public const LONGDESC = parent::LONGDESC;
    public const REFERRERPOLICY = parent::REFERRERPOLICY;
    public const REFERRERPOLICY_NO_REFERRER = parent::REFERRERPOLICY_NO_REFERRER;
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = parent::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE;
    public const REFERRERPOLICY_ORIGIN = parent::REFERRERPOLICY_ORIGIN;
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = parent::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_UNSAFE_URL = parent::REFERRERPOLICY_UNSAFE_URL;
    public const SIZES = parent::SIZES;
    public const SRC = parent::SRC;
    public const SRCSET = parent::SRCSET;
    public const USEMAP = parent::USEMAP;
    public const WIDTH = parent::WIDTH;
    protected $name = 'img';
    use AttrSrc;
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
