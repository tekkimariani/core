<?php
namespace tekki\core\html\attr;
trait Class{
    public function setClass(string $value){
        $this->appendAttribut([Attr::CLASS => $value]);
    }
}