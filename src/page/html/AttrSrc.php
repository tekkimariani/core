<?php
trait AttrSrc{
    //public const SRC = 'src';
    public function attrSrc($url){
        $this->appendAttr([self::SRC]);
    }
}