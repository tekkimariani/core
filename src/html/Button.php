<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Autofocus, Disabled, Form, Formenctype, Formmethod, Formnovalidate, Formtarget, Name, Type, Value};
class Button extends HTMLElement {
    use EventAttributes;
    use Autofocus;
    use Disabled;
    use Form;
    use Formenctype;
    use Formmethod;
    use Formnovalidate;
    use Formtarget;
    use Name;
    use Type;
    use Value;
    /*
    //  The <button> tag defines a clickable button.
    //
    //  Inside a <button> element you can put text (and tags like <i>, <strong>, <br>, <img>, etc.). This is not possible with a button created with the <input> element!
    //
    //  Tip: Always specify the type attribute for a <button> element, to tell browsers what type of button it is.
    */
    public const AUTOFOCUS                                      = Attr::AUTOFOCUS;
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
    public const FORMTARGET                                     = Attr::FORMTARGET;
    public const FORMTARGET_BLANK                               = Attr::FORMTARGET_BLANK;
    public const FORMTARGET_SELF                                = Attr::FORMTARGET_SELF;
    public const FORMTARGET_PARENT                              = Attr::FORMTARGET_PARENT;
    public const FORMTARGET_TOP                                 = Attr::FORMTARGET_TOP;
    public const NAME                                           = Attr::NAME;
    public const TYPE                                           = Attr::TYPE;
    public const TYPE_BUTTON                                    = Attr::TYPE_BUTTON;
    public const TYPE_RESET                                     = Attr::TYPE_RESET;
    public const TYPE_SUBMIT                                    = Attr::TYPE_SUBMIT;
    public const VALUE                                          = Attr::VALUE;
    protected $name = 'button';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
