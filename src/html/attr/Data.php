<?php
namespace tekki\core\html\attr;
trait Data{
    public function setData($value){
        $this->appendAttribut([Attr::DATA => $value]);
    }
}