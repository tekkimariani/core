<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Alt, Coords, Download, Href, Hreflang, Media, Rel, Shape,  Target, Type};
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
    //
    //  Definition and Usage
    //  The <area> tag defines an area inside an image map (an image map is an image with clickable areas).
    //
    //  <area> elements are always nested inside a <map> tag.
    //
    //  Note: The usemap attribute in <img> is associated with the <map> element's name attribute, 
    //  and creates a relationship between the image and the map.
    //
    // alt	text	Specifies an alternate text for the area. Required if the href attribute is present
    // coords	coordinates	Specifies the coordinates of the area   
    // download	filename	Specifies that the target will be downloaded when a user clicks on the hyperlink  
    // href	URL	Specifies the hyperlink target for the area
    // hreflang	language_code	Specifies the language of the target URL
    // media	media query	Specifies what media/device the target URL is optimized for
    // rel	alternate
    // author
    // bookmark
    // help
    // license
    // next
    // nofollow
    // noreferrer
    // prefetch
    // prev
    // search
    // tag	Specifies the relationship between the current document and the target URL
    // shape	default
    // rect
    // circle
    // poly	Specifies the shape of the area
    // target	_blank
    // _parent
    // _self
    // _top
    // framename	Specifies where to open the target URL
    // type	media_type	Specifies the media type of the target URL
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
        /*
$this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
*/
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }

    /* 
    public function attrAlt($alt){
        $this->appendAttribut([self::ALT => $alt]);
    }
    */
    /*    
    public function attrCoords($coords){
        $this->appendAttribut([self::COORDS => $coords]);
    }
    */
    /*
    public function attrDownload($filepath) {
        $this->appendAttribut([self::DOWNLOAD => $filepath]);
    }
    */
    /*
    public function attrHref($url){
        $this->appendAttribut([self::HREF => $url]);
    }
    */
    /*
    public function attrHreflang($languagecode){
        $this->appendAttribut([self::HREFLANG => $languagecode]);
    }
    */
    /*
    public function attrMedia($media){
        $this->appendAttribut([self::MEDIA => $media]);
    }
    */
    /*
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
    public function attrRelPrev() {
        $this->attrRel(self::REL_PREV);
    }
    public function attrRelSearch() {
        $this->attrRel(self::REL_SEARCH);
    }
    public function attrRelTag() {
        $this->attrRel(self::REL_TAG);
    }
    */
    /*
    public function attrShape(string $shape){
        $this->appendAttribut([self::SHAPE => $shape]);
    }  
    public function attrShapeDefault() {
        $this->attrShape(self::SHAPE_DEFAULT);
    }
    public function attrShapeRect() {
        $this->attrShape(self::SHAPE_RECT);
    }
    public function attrShapeCircle() {
        $this->attrShape(self::SHAPE_CIRCLE);
    }
    public function attrShapePoly() {
        $this->attrShape(self::SHAPE_POLY);
    }
    */
    /*
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
    */
    /*    
    public function attrType($type){
        $this->appendAttribut([self::TYPE => $type]);
    }
    */
}