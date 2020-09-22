<?php
namespace tekki\core\html\attr;
trait High{
    public function setHigh($value){
        $this->appendAttribut([Attr::HIGH => $value]);
    }
}