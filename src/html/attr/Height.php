<?php
namespace tekki\core\html\attr;
trait Height{
    public function setHeight(string $height){
        $this->appendAttribut([Attr::HEIGHT => $height]);
    }
}