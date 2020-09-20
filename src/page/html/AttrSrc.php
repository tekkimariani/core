<?php
namespace tekki\core\page\html;
trait AttrSrc{
    public function attrSrc($url){
        $this->appendAttribut(['src' => $url]);
    }
}