<?php
namespace tekki\core\html\attr;
trait Srclang{
    public function setSrclang($value){
        $this->appendAttribut([Attr::SRCLANG => $value]);
    }
}