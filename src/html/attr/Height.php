<?php
namespace tekki\core\html\attr;
trait Height{
    public function setHeight(int $height){
        $this->appendAttribut([Attr::HEIGHT => $height]);
    }
}