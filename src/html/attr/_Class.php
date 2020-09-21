<?php
namespace tekki\core\html\attr;
trait _Class{
    public function setClass(string $value){
        $this->appendAttribut([Attr::_CLASS => $value]);
    }
}