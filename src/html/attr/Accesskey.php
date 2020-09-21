<?php
namespace tekki\core\html\attr;
trait Accesskey{
    public function setSrc($url){
        $this->appendAttribut([Attr::SRC => $url]);
    }
}