<?php
namespace tekki\core\html\dom;
use \DOMDocument;
use \DOMElement;
use \DOMComment;
use tekki\core\html\{
    _Object, A, Abbr, Address, Area, Article, Aside, Audio, B, Base, Bdi, Bdo, Blockquote,
    Body, Br, Button, Canvas, Caption, Cite, Code, Col, Colgroup, Data, Datalist, Dd, Del,
    Details, Dfn, Dialog, Div, Dl, Dt, Em, Embed, Fieldset, Figcaption, Figure, Footer, Form,
    H1, H2, H3, H4, H5, H6, Head, Header, Hr, HTML, I, Iframe, Img, Input, Ins, Kbd, Keygen,
    Label, Legend, Li, Link, Main, Map, Mark, Meta, Meter, Nav, Noscript, Ol, Optgroup, Option,
    Output, P, Param, Pre, Progress, Q, Rp, Rt, Ruby, S, Samp, Script, Section, Select, Small,
    Source, Span, Strong, Style, Sub, Summary, Sup, Svg, Table, Tbody, Td, Template, Textarea,
    Tfoot, Th, Thead, Time, Title, Tr, Track, U, Ul, Variable, Video, Wbr
};
use tekki\core\html\attr\{GlobalAttributes, Attr};
class HTMLElement {
    use GlobalAttributes;
    public const ACCESSKEY             = Attr::ACCESSKEY;
    public const _CLASS                = Attr::_CLASS;
    public const CONTENTEDITABLE       = Attr::CONTENTEDITABLE;
    public const CONTENTEDITABLE_TRUE  = Attr::CONTENTEDITABLE_TRUE;
    public const CONTENTEDITABLE_FALSE = Attr::CONTENTEDITABLE_FALSE;
    public const DIR                   = Attr::DIR;
    public const DIR_LTR               = Attr::DIR_LTR;
    public const DIR_RTL               = Attr::DIR_RTL;
    public const DIR_AUTO              = Attr::DIR_AUTO;
    public const DRAGGABLE             = Attr::DRAGGABLE;
    public const DRAGGABLE_TRUE        = Attr::DRAGGABLE_TRUE;
    public const DRAGGABLE_FALSE       = Attr::DRAGGABLE_FALSE;
    public const DRAGGABLE_AUTO        = Attr::DRAGGABLE_AUTO;
    public const HIDDEN                = Attr::HIDDEN;
    public const ID                    = Attr::ID;
    public const LANG                  = Attr::LANG;
    public const SPELLCHECK            = Attr::SPELLCHECK;
    public const SPELLCHECK_TRUE       = Attr::SPELLCHECK_TRUE;
    public const SPELLCHECK_FALSE      = Attr::SPELLCHECK_FALSE;
    public const STYLE                 = Attr::STYLE;
    public const TABINDEX              = Attr::TABINDEX;
    public const TITLE                 = Attr::TITLE;
    public const TRANSLATE             = Attr::TRANSLATE;
    protected ?DOMDocument $doc = null;
    protected ?DOMElement $element = null;
    protected $name;
    public function __construct($name, DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        if($doc instanceof DOMDocument){
            $this->doc = $doc;
        }
        if(!$this->doc instanceof DOMDocument){
            $this->doc = new DOMDocument();
        }
        $this->element = $this->create($name, $container, $attr, $content);
        return $this->element;
    }
    public function saveHTML(){
        $html = '<!doctype html>'.$this->doc->saveHTML();
        return $html;
    }
    public function save(DOMElement $html): void{
        $this->doc->appendChild($html);
    }
    public function comment(string $value=null, DOMElement $container=null){
        $element = $this->doc->appendChild(new DOMComment($value));
        if($container){
            return $container->appendChild($element);
        }else{
            return $this->element->appendChild($element);
        }
    }
    protected function create(string $name, DOMElement $container=null, array $attr=[], string $content=null){
        $element = $this->doc->appendChild(new DOMElement($name));
        if(count($attr)){
            foreach($attr as $key => $value){
                $item = $this->doc->createAttribute($key);
                $item->value = htmlentities($value);
                $element->appendChild($item);
            }
        }
        if($content!=null){
            $content = $this->doc->createTextNode($content);
            $element->appendChild($content);
        }
        if($container){
            $container->appendChild($element);
            return $element;
        }else{
            return $this->doc->appendChild($element);
        }
    }
    public function text($content){
        if($content!=null){
            $content = $this->doc->createTextNode($content);
            $this->element->appendChild($content);
        }
        return $this;
    }
    public function appendAttribut(array $attr=[]){
        if(count($attr)){
            foreach($attr as $key => $value){
                $item = $this->doc->createAttribute($key);
                $item->value = htmlentities($value);
                $this->element->appendChild($item);
            }
        }
        return $this;
    }
    public function appendElement(HTMLElement $htmlelement){
        $element = $this->doc->importNode($htmlelement->getElement(), true);
        $this->element->appendChild($element);
    }
    public function getElement(){
        return $this->element;
    }
    /*
    //    HTML Tags
    */
    public function a(array $attr = [], string $value = null){
        return new A($this->doc, $this->element, $attr, $value);
    }
    public function abbr(array $attr = [], string $value = null){
        return new Abbr($this->doc, $this->element, $attr, $value);
    }
    public function address(array $attr = [], string $value = null){
        return new Address($this->doc, $this->element, $attr, $value);
    }
    /*
    // <area> elements are always nested inside a <map> tag.
    public function area(array $attr = [], string $value = null){
        return new Area($this->doc, $this->element, $attr, $value);
    }
    */
    public function article(array $attr = [], string $value = null){
        return new Article($this->doc, $this->element, $attr, $value);
    }
    public function aside(array $attr = [], string $value = null){
        return new Aside($this->doc, $this->element, $attr, $value);
    }
    public function audio(array $attr = [], string $value = null){
        return new Audio($this->doc, $this->element, $attr, $value);
    }
    public function b(array $attr = [], string $value = null){
        return new B($this->doc, $this->element, $attr, $value);
    }
    /*
    // There can only be one single <base> element in a document, and it must be inside the <head> element.
    public function base(array $attr = [], string $value = null){
        return new Base($this->doc, $this->element, $attr, $value);
    }
    */
    public function bdi(array $attr = [], string $value = null){
        return new Bdi($this->doc, $this->element, $attr, $value);
    }
    public function bdo(array $attr = [], string $value = null){
        return new Bdo($this->doc, $this->element, $attr, $value);
    }
    public function blockquote(array $attr = [], string $value = null){
        return new Blockquote($this->doc, $this->element, $attr, $value);
    }
    /*
    // The <body> element is only allowed in the <html> element.
    public function body(array $attr = [], string $value = null){
        return new Body($this->doc, $this->element, $attr, $value);
    }
    */
    public function br(array $attr = [], string $value = null){
        return new Br($this->doc, $this->element, $attr, $value);
    }
    public function button(array $attr = [], string $value = null){
        return new Button($this->doc, $this->element, $attr, $value);
    }
    public function canvas(array $attr = [], string $value = null){
        return new Canvas($this->doc, $this->element, $attr, $value);
    }
    /*
    //  Contexts in which this element can be used:
    //  As the first element child of a table element.
    public function caption(array $attr = [], string $value = null){
        return new caption($this->doc, $this->element, $attr, $value);
    }
    */
    public function cite(array $attr = [], string $value = null){
        return new Cite($this->doc, $this->element, $attr, $value);
    }
    public function code(array $attr = [], string $value = null){
        return new Code($this->doc, $this->element, $attr, $value);
    }
    /*
    //    Contexts in which this element can be used:
    //    As a child of a colgroup element that doesn't have a span attribute.
    public function col(array $attr = [], string $value = null){
        return new Col($this->doc, $this->element, $attr, $value);
    }
    */
    /*
    //    Contexts in which this element can be used:
    //    As a child of a table element, after any caption elements and before any thead, tbody, tfoot, and tr elements.
    public function colgroup(array $attr = [], string $value = null){
        return new Colgroup($this->doc, $this->element, $attr, $value);
    }
    */
    public function data(array $attr = [], string $value = null){
        return new Data($this->doc, $this->element, $attr, $value);
    }
    public function datalist(array $attr = [], string $value = null){
        return new Datalist($this->doc, $this->element, $attr, $value);
    }
    /*
    //  https://html.spec.whatwg.org/multipage/grouping-content.html#the-dd-element
    //  Contexts in which this element can be used:
    //  After dt or dd elements inside dl elements.
    //  After dt or dd elements inside div elements that are children of a dl element.
    public function dd(array $attr = [], string $value = null){
        return new Dd($this->doc, $this->element, $attr, $value);
    }
    */
    public function del(array $attr = [], string $value = null){
        return new Del($this->doc, $this->element, $attr, $value);
    }
    public function details(array $attr = [], string $value = null){
        return new Details($this->doc, $this->element, $attr, $value);
    }
    public function dfn(array $attr = [], string $value = null){
        return new Dfn($this->doc, $this->element, $attr, $value);
    }
    public function dialog(array $attr = [], string $value = null){
        return new Dialog($this->doc, $this->element, $attr, $value);
    }
    public function div(array $attr = [], string $value = null){
        return new Div($this->doc, $this->element, $attr, $value);
    }
    public function dl(array $attr = [], string $value = null){
        return new Dl($this->doc, $this->element, $attr, $value);
    }   
    public function dt(array $attr = [], string $value = null){
        return new Dt($this->doc, $this->element, $attr, $value);
    }
    public function em(array $attr = [], string $value = null){
        return new Em($this->doc, $this->element, $attr, $value);
    }
    public function embed(array $attr = [], string $value = null){
        return new Embed($this->doc, $this->element, $attr, $value);
    }
    public function fieldset(array $attr = [], string $value = null){
        return new Fieldset($this->doc, $this->element, $attr, $value);
    }
    public function figcaption(array $attr = [], string $value = null){
        return new Figcaption($this->doc, $this->element, $attr, $value);
    }
    public function figure(array $attr = [], string $value = null){
        return new Figure($this->doc, $this->element, $attr, $value);
    }
    public function footer(array $attr = [], string $value = null){
        return new Footer($this->doc, $this->element, $attr, $value);
    }
    public function form(array $attr = [], string $value = null){
        return new Form($this->doc, $this->element, $attr, $value);
    }
    public function h1(array $attr = [], string $value = null){
        return new H1($this->doc, $this->element, $attr, $value);
    }
    public function h2(array $attr = [], string $value = null){
        return new H2($this->doc, $this->element, $attr, $value);
    }
    public function h3(array $attr = [], string $value = null){
        return new H3($this->doc, $this->element, $attr, $value);
    }
    public function h4(array $attr = [], string $value = null){
        return new H4($this->doc, $this->element, $attr, $value);
    }
    public function h5(array $attr = [], string $value = null){
        return new H5($this->doc, $this->element, $attr, $value);
    }
    public function h6(array $attr = [], string $value = null){
        return new H6($this->doc, $this->element, $attr, $value);
    }
    /*
    // The <head> element is only allowed in the <html> element.
    public function head(array $attr = [], string $value = null){
        return new Head($this->doc, $this->element, $attr, $value);
    }
    */ 
    public function header(array $attr = [], string $value = null){
        return new Header($this->doc, $this->element, $attr, $value);
    }
    public function hr(array $attr = [], string $value = null){
        return new Hr($this->doc, $this->element, $attr, $value);
    }
    /*
    // The <html> element must not be located anywhere in the document; it have to been the root element and it must be instantiated.
    public function html($container=null,$attr=array(),$value=null){
        return $this->create('html',$container,$attr,$value);
    }
    */
    public function i(array $attr = [], string $value = null){
        return new I($this->doc, $this->element, $attr, $value);
    }
    public function iframe(array $attr = [], string $value = null){
        return new Iframe($this->doc, $this->element, $attr, $value);
    }
    public function img(array $attr = [], string $value = null){
        return new Img($this->doc, $this->element, $attr, $value);
    }
    public function input(array $attr = [], string $value = null){
        return new Input($this->doc, $this->element, $attr, $value);
    }
    public function ins(array $attr = [], string $value = null){
        return new Ins($this->doc, $this->element, $attr, $value);
    }
    public function kbd(array $attr = [], string $value = null){
        return new Kbd($this->doc, $this->element, $attr, $value);
    }
    /*
    public function keygen(array $attr = [], string $value = null){
        return new Keygen($this->doc, $this->element, $attr, $value);
    }
    */
    public function label(array $attr = [], string $value = null){
        return new Label($this->doc, $this->element, $attr, $value);
    }
    public function legend(array $attr = [], string $value = null){
        return new Legend($this->doc, $this->element, $attr, $value);
    }
    public function li(array $attr = [], string $value = null){
        return new Li($this->doc, $this->element, $attr, $value);
    }
    /*
    public function link(array $attr = [], string $value = null){
        return new Link($this->doc, $this->element, $attr, $value);
    }
    */ 
    public function main(array $attr = [], string $value = null){
        return new Main($this->doc, $this->element, $attr, $value);
    }
    public function map(array $attr = [], string $value = null){
        return new Map($this->doc, $this->element, $attr, $value);
    }
    public function mark(array $attr = [], string $value = null){
        return new Mark($this->doc, $this->element, $attr, $value);
    }
    /*
    // Not supported by browsers
    public function menu(array $attr = [], string $value = null){
        return new Menu($this->doc, $this->element, $attr, $value);
    }
    // Not longer within the HTML5 standard
    public function menuitem(array $attr = [], string $value = null){
        return new Menuitem($this->doc, $this->element, $attr, $value);
    }
    */
    /*
    public function meta(array $attr = [], string $value = null){
        return new Meta($this->doc, $this->element, $attr, $value);
    }
    */
    public function meter(array $attr = [], string $value = null){
        return new Meter($this->doc, $this->element, $attr, $value);
    }
    public function nav(array $attr = [], string $value = null){
        return new Nav($this->doc, $this->element, $attr, $value);
    }
    public function noscript(array $attr = [], string $value = null){
        return new Noscript($this->doc, $this->element, $attr, $value);
    }
    public function object(array $attr = [], string $value = null){
        return new _Object($this->doc, $this->element, $attr, $value);
    }
    public function ol(array $attr = [], string $value = null){
        return new Ol($this->doc, $this->element, $attr, $value);
    }
    public function optgroup(array $attr = [], string $value = null){
        return new Optgroup($this->doc, $this->element, $attr, $value);
    }
    public function option(array $attr = [], string $value = null){
        return new Option($this->doc, $this->element, $attr, $value);
    }
    public function output(array $attr = [], string $value = null){
        return new Output($this->doc, $this->element, $attr, $value);
    }
    public function p(array $attr = [], string $value = null){
        return new P($this->doc, $this->element, $attr, $value);
    }
    public function param(array $attr = [], string $value = null){
        return new Param($this->doc, $this->element, $attr, $value);
    }
    public function pre(array $attr = [], string $value = null){
        return new Pre($this->doc, $this->element, $attr, $value);
    }
    public function progress(array $attr = [], string $value = null){
        return new Progress($this->doc, $this->element, $attr, $value);
    }
    public function q(array $attr = [], string $value = null){
        return new Q($this->doc, $this->element, $attr, $value);
    }
    public function rp(array $attr = [], string $value = null){
        return new Rp($this->doc, $this->element, $attr, $value);
    }
    public function rt(array $attr = [], string $value = null){
        return new Rt($this->doc, $this->element, $attr, $value);
    }
    public function ruby(array $attr = [], string $value = null){
        return new Ruby($this->doc, $this->element, $attr, $value);
    }
    public function s(array $attr = [], string $value = null){
        return new S($this->doc, $this->element, $attr, $value);
    }
    public function samp(array $attr = [], string $value = null){
        return new Samp($this->doc, $this->element, $attr, $value);
    }
    public function script(array $attr = [], string $value = null){
        return new Script($this->doc, $this->element, $attr, $value);
    }
    public function section(array $attr = [], string $value = null){
        return new Section($this->doc, $this->element, $attr, $value);
    }
    public function select(array $attr = [], string $value = null){
        return new Select($this->doc, $this->element, $attr, $value);
    }
    public function small(array $attr = [], string $value = null){
        return new Small($this->doc, $this->element, $attr, $value);
    }
    public function source(array $attr = [], string $value = null){
        return new Source($this->doc, $this->element, $attr, $value);
    }
    public function span(array $attr = [], string $value = null){
        return new Span($this->doc, $this->element, $attr, $value);
    }
    public function strong(array $attr = [], string $value = null){
        return new Strong($this->doc, $this->element, $attr, $value);
    }
    public function style(array $attr = [], string $value = null){
        return new Style($this->doc, $this->element, $attr, $value);
    }
    public function sub(array $attr = [], string $value = null){
        return new Sub($this->doc, $this->element, $attr, $value);
    }
    public function summary(array $attr = [], string $value = null){
        return new Summary($this->doc, $this->element, $attr, $value);
    }
    public function sup(array $attr = [], string $value = null){
        return new Sup($this->doc, $this->element, $attr, $value);
    }
    public function table(array $attr = [], string $value = null){
        return new Table($this->doc, $this->element, $attr, $value);
    }
    public function tbody(array $attr = [], string $value = null){
        return new Tbody($this->doc, $this->element, $attr, $value);
    }
    public function td(array $attr = [], string $value = null){
        return new Td($this->doc, $this->element, $attr, $value);
    }
    public function textarea(array $attr = [], string $value = null){
        return new Textarea($this->doc, $this->element, $attr, $value);
    }
    public function tfoot(array $attr = [], string $value = null){
        return new Tfoot($this->doc, $this->element, $attr, $value);
    }
    public function th(array $attr = [], string $value = null){
        return new Th($this->doc, $this->element, $attr, $value);
    }
    public function thead(array $attr = [], string $value = null){
        return new Thead($this->doc, $this->element, $attr, $value);
    }
    public function time(array $attr = [], string $value = null){
        return new Time($this->doc, $this->element, $attr, $value);
    }
    /*
    public function title(array $attr = [], string $value = null){
        return new Title($this->doc, $this->element, $attr, $value);
    }
    */
    public function tr(array $attr = [], string $value = null){
        return new Tr($this->doc, $this->element, $attr, $value);
    }
    public function track(array $attr = [], string $value = null){
        return new Track($this->doc, $this->element, $attr, $value);
    }
    public function u(array $attr = [], string $value = null){
        return new U($this->doc, $this->element, $attr, $value);
    }
    public function ul(array $attr = [], string $value = null){
        return new Ul($this->doc, $this->element, $attr, $value);
    }
    public function var(array $attr = [], string $value = null){
        return new Variable($this->doc, $this->element, $attr, $value);
    }
    public function video(array $attr = [], string $value = null){
        return new Video($this->doc, $this->element, $attr, $value);
    }
    public function wbr(array $attr = [], string $value = null){
        return new Wbr($this->doc, $this->element, $attr, $value);
    }
}
