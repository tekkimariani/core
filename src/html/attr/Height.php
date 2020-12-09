<?php
namespace tekki\core\html\attr;
trait Height{
    public function setHeight(string $height){
        return $this->appendAttribut([Attr::HEIGHT => $height]);
    }
}