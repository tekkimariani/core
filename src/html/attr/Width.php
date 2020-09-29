<?php
namespace tekki\core\html\attr;
trait Width{
    public function setWidth(string $width){
        $this->appendAttribut([Attr::WIDTH => $width]);
    }
}