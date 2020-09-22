<?php
namespace tekki\core\html\attr;
trait Size{
    public function setSize($size){
        $this->appendAttribut([Attr::SIZE => $size]);
    }
}