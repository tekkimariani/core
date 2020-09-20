<?php
namespace tekki\core\page\html\attr;
use tekki\core\page\html\attr\HTMLAttr as Attr;
trait Src{
    public function setSrc($url){
        $this->appendAttribut([Attr::SRC => $url]);
    }
}