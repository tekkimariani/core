<?php
namespace tekki\core\html\attr;
trait Src{
    public function setSrc($url){
        $this->appendAttribut([Attr::SRC => $url]);
    }
}