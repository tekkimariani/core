<?php
namespace tekki\core\html\attr;
trait Srclang{
    public function setSrclang($value){
        return $this->appendAttribut([Attr::SRCLANG => $value]);
    }
}