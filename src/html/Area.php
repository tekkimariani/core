<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Alt, Coords, Download, Href, Hreflang, Media, Rel, Shape, Target, Type};
class Area extends HTMLElement {
    use EventAttributes;
    use Alt;
    use Coords;
    use Download;
    use Href;
    use Hreflang;
    use Media;
    use Rel;
    use Shape;
    use Target;
    use Type;
    /*
    //  INFO: <area> is an empty element
    //  Definition and Usage
    //  The <area> tag defines an area inside an image map (an image map is an image with clickable areas).
    //  <area> elements are always nested inside a <map> tag.
    //  Note: The usemap attribute in <img> is associated with the <map> element's name attribute, 
    //  and creates a relationship between the image and the map.
    */
    public const ALT                = Attr::ALT;
    public const COORDS             = Attr::COORDS;
    public const DOWNLOAD           = Attr::DOWNLOAD;
    public const HREF               = Attr::HREF;
    public const HREFLANG           = Attr::HREFLANG;
    public const MEDIA              = Attr::MEDIA;
    public const REL                = Attr::REL;
    public const REL_ALTERNATE      = Attr::REL_ALTERNATE;
    public const REL_AUTHOR         = Attr::REL_AUTHOR;
    public const REL_BOOKMARK       = Attr::REL_BOOKMARK;
    public const REL_HELP           = Attr::REL_HELP;
    public const REL_LICENSE        = Attr::REL_LICENSE;
    public const REL_NEXT           = Attr::REL_NEXT;
    public const REL_NOFOLLOW       = Attr::REL_NOFOLLOW;
    public const REL_NOREFERRER     = Attr::REL_NOREFERRER;
    public const REL_PREV           = Attr::REL_PREV;
    public const REL_SEARCH         = Attr::REL_SEARCH;
    public const REL_TAG            = Attr::REL_TAG;
    public const SHAPE              = Attr::SHAPE;
    public const SHAPE_DEFAULT      = Attr::SHAPE_DEFAULT;
    public const SHAPE_RECT         = Attr::SHAPE_RECT;
    public const SHAPE_CIRCLE       = Attr::SHAPE_CIRCLE;
    public const SHAPE_POLY         = Attr::SHAPE_POLY;
    public const TARGET             = Attr::TARGET;
    public const TARGET_BLANK       = Attr::TARGET_BLANK;
    public const TARGET_PARENT      = Attr::TARGET_PARENT;
    public const TARGET_SELF        = Attr::TARGET_SELF;
    public const TARGET_TOP         = Attr::TARGET_TOP;
    public const TYPE               = Attr::TYPE;
    protected $name = 'area';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}