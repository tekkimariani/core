<?php
namespace tekki\core\html\attr;
trait Width{
    public function attrWidth(int $width){
        $this->appendAttribut([Attr::WIDTH => $width]);
    }
}