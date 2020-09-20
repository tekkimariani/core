<?php
namespace tekki\core\page\html;
use HTMLAttr as Attr;
trait AttrSrc{
    //public const SRC = 'src';
    public function attrSrc($url){
        $this->appendAttribut([Attr::SRC => $url]);
    }
}