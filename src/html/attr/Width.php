<?php
namespace tekki\core\html\attr;
trait Width{
    public function setWidth(string $width){
        return $this->appendAttribut([Attr::WIDTH => $width]);
    }
}