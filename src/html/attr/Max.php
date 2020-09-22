<?php
namespace tekki\core\html\attr;
trait Max{
    public function setMax($max){
        $this->appendAttribut([Attr::MAX => $max]);
    }
}