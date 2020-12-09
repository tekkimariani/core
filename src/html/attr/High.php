<?php
namespace tekki\core\html\attr;
trait High{
    public function setHigh($value){
        return $this->appendAttribut([Attr::HIGH => $value]);
    }
}