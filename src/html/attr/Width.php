<?php
namespace tekki\core\html\attr;
trait Width{
    public function setWidth(int $width){
        $this->appendAttribut([Attr::WIDTH => $width]);
    }
}