<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Acceptcharset, Action, Autocomplete, Enctype, Method, Name, Novalidate, Rel, Target};
class Form extends HTMLElement {
    use EventAttributes;
    use Acceptcharset;
    use Action;
    use Autocomplete;
    use Enctype;
    use Method;
    use Name;
    use Novalidate;
    use Rel;
    use Target;
    public const ACCEPT_CHARSET                            = Attr::ACCEPT_CHARSET;
    public const ACTION                                    = Attr::ACTION;
    public const AUTOCOMPLETE                              = Attr::AUTOCOMPLETE;
    public const AUTOCOMPLETE_ON                           = Attr::AUTOCOMPLETE_ON;
    public const AUTOCOMPLETE_OFF                          = Attr::AUTOCOMPLETE_OFF;
    public const ENCTYPE                                   = Attr::ENCTYPE;
    public const ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = Attr::ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED;
    public const ENCTYPE_MULTIPART_FORM_DATA               = Attr::ENCTYPE_MULTIPART_FORM_DATA;
    public const ENCTYPE_TEXT_PLAIN                        = Attr::ENCTYPE_TEXT_PLAIN;
    public const METHOD                                    = Attr::METHOD;
    public const METHOD_POST                               = Attr::METHOD_POST;
    public const METHOD_GET                                = Attr::METHOD_GET;
    public const NAME                                      = Attr::NAME;
    public const NOVALIDATE                                = Attr::NOVALIDATE;
    public const REL                                       = Attr::REL;
    public const REL_EXTERNAL                              = Attr::REL_EXTERNAL;
    public const REL_HELP                                  = Attr::REL_HELP;
    public const REL_LICENSE                               = Attr::REL_LICENSE;
    public const REL_NEXT                                  = Attr::REL_NEXT;
    public const REL_NOFOLLOW                              = Attr::REL_NOFOLLOW;
    public const REL_NOOPENER                              = Attr::REL_NOOPENER;
    public const REL_NOREFERRER                            = Attr::REL_NOREFERRER;
    public const REL_OPENER                                = Attr::REL_OPENER;
    public const REL_PREV                                  = Attr::REL_PREV;
    public const REL_SEARCH                                = Attr::REL_SEARCH;
    public const TARGET                                    = Attr::TARGET;
    public const TARGET_BLANK                              = Attr::TARGET_BLANK;
    public const TARGET_SELF                               = Attr::TARGET_SELF;
    public const TARGET_PARENT                             = Attr::TARGET_PARENT;
    public const TARGET_TOP                                = Attr::TARGET_TOP;
    protected $name = 'form';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
