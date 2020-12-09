<?php
namespace tekki\core\html\attr;
trait Max{
    public function setMax($max){
        return $this->appendAttribut([Attr::MAX => $max]);
    }
}