<?php
namespace tekki\core\html\attr;
trait Sizes{
    public function setSizes(string $url){
        $this->appendAttribut([Attr::SIZES => $url]);
    }
}