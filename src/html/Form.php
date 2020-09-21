<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Form extends HTMLElementEvent {
    /*
accept-charset Specifies the character encodings that are to be used for the form submission
character_set	
action	URL	Specifies where to send the form-data when a form is submitted
autocomplete on off	Specifies whether a form should have autocomplete on or off
enctype Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
application/x-www-form-urlencoded multipart/form-data text/plain
method	get post	Specifies the HTTP method to use when sending form-data
name	text	Specifies the name of a form
novalidate Specifies that the form should not be validated when submitted
novalidate	
rel	Specifies the relationship between a linked resource and the current document
external help license next nofollow noopener noreferrer opener prev search
target Specifies where to display the response that is received after submitting the form
_blank _self _parent _top	
    */
    public const ACCEPT_CHARSET = parent::ACCEPT_CHARSET;
    public const ACTION = parent::ACTION;
    public const AUTOCOMPLETE = parent::AUTOCOMPLETE;
    public const AUTOCOMPLETE_ON = parent::AUTOCOMPLETE_ON;
    public const AUTOCOMPLETE_OFF = parent::AUTOCOMPLETE_OFF;
    private const ENCTYPE = parent::ENCTYPE;
    private const ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = parent::ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED;
    private const ENCTYPE_MULTIPART_FORM_DATA = parent::ENCTYPE_MULTIPART_FORM_DATA;
    private const ENCTYPE_TEXT_PLAIN = parent::ENCTYPE_TEXT_PLAIN;
    private const METHOD = parent::METHOD;
    private const METHOD_POST = parent::METHOD_POST;
    private const METHOD_GET = parent::METHOD_GET;
    private const NAME = parent::NAME;
    private const NOVALIDATE = parent::NOVALIDATE;
    private const REL = parent::REL;
    private const REL_EXTERNAL = parent::REL_EXTERNAL;
    private const REL_HELP = parent::REL_HELP;
    private const REL_LICENSE = parent::REL_LICENSE;
    private const REL_NEXT = parent::REL_NEXT;
    private const REL_NOFOLLOW = parent::REL_NOFOLLOW;
    private const REL_NOOPENER = parent::REL_NOOPENER;
    private const REL_NOREFERRER = parent::REL_NOREFERRER;
    private const REL_OPENER = parent::REL_OPENER;
    private const REL_PREV = parent::REL_PREV;
    private const REL_SEARCH = parent::REL_SEARCH;
    private const TARGET = parent::TARGET;
    private const TARGET_BLANK = parent::TARGET_BLANK;
    private const TARGET_SELF = parent::TARGET_SELF;
    private const TARGET_PARENT = parent::TARGET_PARENT;
    private const TARGET_TOP = parent::TARGET_TOP;
    protected $name = 'form';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrAcceptCharset($charset) {
        $this->appendAttribut([self::ACCEPT_CHARSET => $charset]);
    }
    public function attrAction($url) {
        $this->appendAttribut([self::ACTION => $url]);
    }
    public function attrAutocomplete($autocomplete) {
        $this->appendAttribut([self::AUTOCOMPLETE => $autocomplete]);
    }
    public function attrAutocompleteOn() {
        $this->attrAutocomplete(self::AUTOCOMPLETE_ON);
    }
    public function attrAutocompleteOff() {
        $this->attrAutocomplete(self::AUTOCOMPLETE_OFF);
    }
    public function attrEnctype($enctype) {
        $this->appendAttribut([self::ENCTYPE => $enctype]);
    }
    public function attrEnctypeApplicationXwwwFormData() {
        $this->attrEnctype(self::ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED);
    }
    public function attrEnctypeMultipartFormData() {
        $this->attrEnctype(self::ENCTYPE_MULTIPART_FORM_DATA);
    }
    public function attrEnctypeTextPlain() {
        $this->attrEnctype(self::ENCTYPE_TEXT_PLAIN);
    }
    public function attrMethod($method) {
        $this->appendAttribut([self::METHOD => $method]);
    }
    public function attrMethodGet() {
        $this->attrMethod(self::METHOD_GET);
    }
    public function attrMethodPost() {
        $this->attrMethod(self::METHOD_POST);
    }
    public function attrName($name) {
        $this->appendAttribut([self::NAME => $name]);
    }
    public function attrNovalidate() {
        $this->appendAttribut([self::NOVALIDATE]);
    }
    public function attrRel($rel) {
        $this->appendAttribut([self::REL => $rel]);
    }
    public function attrRelExternal() {
        $this->attrRel(self::REL_EXTERNAL);
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
    public function attrRelNoopener() {
        $this->attrRel(self::REL_NOOPENER);
    }
    public function attrRelNoreferrer() {
        $this->attrRel(self::REL_NOREFERRER);
    }
    public function attrRelOpener() {
        $this->attrRel(self::REL_OPENER);
    }
    public function attrRelPrev() {
        $this->attrRel(self::REL_PREV);
    }
    public function attrRelSearch() {
        $this->attrRel(self::REL_SEARCH);
    }
    public function attrTarget($target) {
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
}