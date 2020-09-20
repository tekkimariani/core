<?php
namespace tekki\core\page\html;
trait AttrSrc{
    //public const SRC = 'src';
    public function attrSrc($url){
        $this->appendAttr([self::SRC]);
    }
}