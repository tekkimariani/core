<?php
namespace tekki\core\html\attr;
trait Size{
    public function setSize($size){
        return $this->appendAttribut([Attr::SIZE => $size]);
    }
}