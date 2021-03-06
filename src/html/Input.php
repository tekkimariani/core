<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Accept, Alt, Autocomplete, Autofocus, Checked, Longdesc, Dirname, Disabled,
    Form, Formaction, Formenctype, Formmethod, Formnovalidate, Formtarget, Height, _List, Max, Maxlength,
    Min, Minlength, Multiple, Name, Pattern, Placeholder, Readonly, Required, Size, Src, Step, Type, Value, Width};
class Input extends HTMLElement {
    use EventAttributes;
    use Accept;
    use Alt;
    use Autocomplete;
    use Autofocus;
    use Checked;
    use Longdesc;
    use Dirname;
    use Disabled;
    use Form;
    use Formaction;
    use Formenctype;
    use Formmethod;
    use Formnovalidate;
    use Formtarget;
    use Height;
    use _List;
    use Max;
    use Maxlength;
    use Min;
    use Minlength;
    use Multiple;
    use Name;
    use Pattern;
    use Placeholder;
    use Readonly;
    use Required;
    use Size;
    use Src;
    use Step;
    use Type;
    use Value;
    use Width;
    public const ACCEPT                                         = Attr::ACCEPT;
    public const ALT                                            = Attr::ALT;
    public const AUTOCOMPLETE                                   = Attr::AUTOCOMPLETE;
    public const AUTOFUCUS                                      = Attr::AUTOFOCUS;
    public const CHECKED                                        = Attr::CHECKED;
    public const LONGDESC                                       = Attr::LONGDESC;
    public const DIRNAME                                        = Attr::DIRNAME;
    public const DISABLED                                       = Attr::DISABLED;
    public const FORM                                           = Attr::FORM;
    public const FORMACTION                                     = Attr::FORMACTION;
    public const FORMENCTYPE                                    = Attr::FORMENCTYPE;
    public const FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED  = Attr::FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED;
    public const FORMENCTYPE_MULTIPART_FORM_DATA                = Attr::FORMENCTYPE_MULTIPART_FORM_DATA;
    public const FORMENCTYPE_TEXT_PLAIN                         = Attr::FORMENCTYPE_TEXT_PLAIN;
    public const FORMMETHOD                                     = Attr::FORMMETHOD;
    public const FORMMETHOD_GET                                 = Attr::FORMMETHOD_GET;
    public const FORMMETHOD_POST                                = Attr::FORMMETHOD_POST;
    public const FORMNOVALIDATE                                 = Attr::FORMNOVALIDATE;
    public const FORMTAGET                                      = Attr::FORMTARGET;
    public const FORMTARGET_BLANK                               = Attr::FORMTARGET_BLANK;
    public const FORMTARGET_SELF                                = Attr::FORMTARGET_SELF;
    public const FORMTARGET_PARENT                              = Attr::FORMTARGET_PARENT;
    public const FORMTARGET_TOP                                 = Attr::FORMTARGET_TOP;
    public const HEIGHT                                         = Attr::HEIGHT;
    public const LIST                                           = Attr::LIST;
    public const MAX                                            = Attr::MAX;
    public const MAXLENGTH                                      = Attr::MAXLENGTH;
    public const MIN                                            = Attr::MIN;
    public const MINLENGTH                                      = Attr::MINLENGTH;
    public const MULTIPLE                                       = Attr::MULTIPLE;
    public const NAME                                           = Attr::NAME;
    public const PATTERN                                        = Attr::PATTERN;
    public const PLACEHOLDER                                    = Attr::PLACEHOLDER;
    public const READONLY                                       = Attr::READONLY;
    public const REQUIRED                                       = Attr::REQUIRED;
    public const SIZE                                           = Attr::SIZE;
    public const SRC                                            = Attr::SRC;
    public const STEP                                           = Attr::STEP;
    public const TYPE                                           = Attr::TYPE;
    public const TYPE_BUTTON                                    = Attr::TYPE_BUTTON;
    public const TYPE_CHECKBOX                                  = Attr::TYPE_CHECKBOX;
    public const TYPE_COLOR                                     = Attr::TYPE_COLOR;
    public const TYPE_DATE                                      = Attr::TYPE_DATE;
    public const TYPE_DATETIME_LOCAL                            = Attr::TYPE_DATETIME_LOCAL;
    public const TYPE_EMAIL                                     = Attr::TYPE_EMAIL;
    public const TYPE_FILE                                      = Attr::TYPE_FILE;
    public const TYPE_HIDDEN                                    = Attr::TYPE_HIDDEN;
    public const TYPE_IMAGE                                     = Attr::TYPE_IMAGE;
    public const TYPE_MONTH                                     = Attr::TYPE_MONTH;
    public const TYPE_NUMBER                                    = Attr::TYPE_NUMBER;
    public const TYPE_PASSWORD                                  = Attr::TYPE_PASSWORD;
    public const TYPE_RADIO                                     = Attr::TYPE_RADIO;
    public const TYPE_RANGE                                     = Attr::TYPE_RANGE;
    public const TYPE_RESET                                     = Attr::TYPE_RESET;
    public const TYPE_SEARCH                                    = Attr::TYPE_SEARCH;
    public const TYPE_SUBMIT                                    = Attr::TYPE_SUBMIT;
    public const TYPE_TEL                                       = Attr::TYPE_TEL;
    public const TYPE_TEXT                                      = Attr::TYPE_TEXT;
    public const TYPE_TIME                                      = Attr::TYPE_TIME;
    public const TYPE_URL                                       = Attr::TYPE_URL;
    public const TYPE_WEEK                                      = Attr::TYPE_WEEK;
    public const VALUE                                          = Attr::VALUE;
    public const WIDTH                                          = Attr::WIDTH;
    protected $name = 'input';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
