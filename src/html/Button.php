<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use FirePHP;
class Button extends HTMLElementEvent {
    /*
    //  The <button> tag defines a clickable button.
    //
    //  Inside a <button> element you can put text (and tags like <i>, <strong>, <br>, <img>, etc.). This is not possible with a button created with the <input> element!
    //
    //  Tip: Always specify the type attribute for a <button> element, to tell browsers what type of button it is.
    */
    /*
    //  autofocus	autofocus	Specifies that a button should automatically get focus when the page loads
    //  disabled	disabled	Specifies that a button should be disabled
    //  form	form_id	Specifies which form the button belongs to
    //  formaction	URL	Specifies where to send the form-data when a form is submitted. Only for type="submit"
    //  formenctype	application/x-www-form-urlencoded
    //  multipart/form-data
    //  text/plain	Specifies how form-data should be encoded before sending it to a server. Only for type="submit"
    //  formmethod	get
    //  post	Specifies how to send the form-data (which HTTP method to use). Only for type="submit"
    //  formnovalidate	formnovalidate	Specifies that the form-data should not be validated on submission. Only for type="submit"
    //  formtarget	_blank
    //  _self
    //  _parent
    //  _top
    //  framename	Specifies where to display the response after submitting the form. Only for type="submit"
    //  name	name	Specifies a name for the button
    //  type	button
    //  reset
    //  submit	Specifies the type of button
    //  value	text	Specifies an initial value for the button
    */
    public const AUTOFOCUS = parent::AUTOFOCUS;
    public const DISABLED = parent::DISABLED;
    public const FORM = parent::FORM;
    public const FORMACTION = parent::FORMACTION;
    public const FORMENCTYPE = parent::FORMENCTYPE;
    public const FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = parent::FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED;
    public const FORMENCTYPE_MULTIPART_FORM_DATA = parent::FORMENCTYPE_MULTIPART_FORM_DATA;
    public const FORMENCTYPE_TEXT_PLAIN = parent::FORMENCTYPE_TEXT_PLAIN;
    public const FORMMETHOD = parent::FORMMETHOD;
    public const FORMMETHOD_GET = parent::FORMMETHOD_GET;
    public const FORMMETHOD_POST = parent::FORMMETHOD_POST;
    public const FORMNOVALIDATE = parent::FORMNOVALIDATE;
    public const FORMTARGET = parent::FORMTARGET;
    public const FORMTARGET_BLANK = parent::FORMTARGET_BLANK;
    public const FORMTARGET_SELF = parent::FORMTARGET_SELF;
    public const FORMTARGET_PARENT = parent::FORMTARGET_PARENT;
    public const FORMTARGET_TOP = parent::FORMTARGET_TOP;
    public const NAME = parent::NAME;
    public const TYPE = parent::TYPE;
    public const TYPE_BUTTON = parent::TYPE_BUTTON;
    public const TYPE_RESET = parent::TYPE_RESET;
    public const TYPE_SUBMIT = parent::TYPE_SUBMIT;
    public const VALUE = parent::VALUE;
    protected $name = 'button';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        $this->console = FirePHP::getInstance(true);
        $this->console->setEnabled(true);
        $this->console->log(__METHOD__);
        parent::__construct($this->name, $doc, $container, $attr, $content);
    }
    public function attrAutofocus(){
        $this->appendAttribut([self::AUTOFOCUS => null]);
    }
    public function attrDisabled(){
        $this->appendAttribut([self::DISABLED => null]);
    }
    public function attrForm($formId){
        $this->appendAttribut([self::FORM => $formId]);
    }
    public function attrFormEnctype(string $enctype){
        $this->appendAttribut([self::FORMENCTYPE => $enctype]);
    }
    public function attrFormEnctypeApplicationXwwwFormData() {
        $this->attrFormEnctype(self::FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED);
    }
    public function attrFormEnctypeMultipartFormData() {
        $this->attrFormEnctype(self::FORMENCTYPE_MULTIPART_FORM_DATA);
    }
    public function attrFormEnctypeTextPlain() {
        $this->attrFormEnctype(self::FORMENCTYPE_TEXT_PLAIN);
    }
    public function attrFormMethod(string $method){
        $this->appendAttribut([self::FORMMETHOD => $method]);
    }
    public function attrFormMethodGet() {
        $this->attrFormMethod(self::FORMMETHOD_GET);
    }
    public function attrFormMethodPost() {
        $this->attrFormMethod(self::FORMMETHOD_POST);
    }
    public function attrFormnovalidate(){
        $this->appendAttribut([self::FORMNOVALIDATE => null]);
    }
    public function attrFormTarget(string $target){
        $this->appendAttribut([self::FORMTARGET => $target]);
    }
    public function attrFormTargetBlank() {
        $this->attrFormTarget(self::FORMTARGET_BLANK);
    }
    public function attrFormTargetParent() {
        $this->attrFormTarget(self::FORMTARGET_PARENT);
    }
    public function attrFormTargetSelf() {
        $this->attrFormTarget(self::FORMTARGET_SELF);
    }
    public function attrFormTargetTop() {
        $this->attrFormTarget(self::FORMTARGET_TOP);
    }
    public function attrName(string $name){
        $this->appendAttribut([self::NAME => $name]);
    }
    public function attrType(string $type){
        $this->appendAttribut([self::TYPE => $type]);
    }
    public function attrTypeButton() {
        $this->attrType(self::TYPE_BUTTON);
    }
    public function attrTypeReset() {
        $this->attrType(self::TYPE_RESET);
    }
    public function attrTypeSubmit() {
        $this->attrType(self::TYPE_SUBMIT);
    }
    public function attrValue(string $value){
        $this->appendAttribut([self::VALUE => $value]);
    }
}