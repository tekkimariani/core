<?php
namespace tekki\core\html\attr;
trait Src{
    public function setSrc($url){
        return $this->appendAttribut([Attr::SRC => $url]);
    }
}