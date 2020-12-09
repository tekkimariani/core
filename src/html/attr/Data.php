<?php
namespace tekki\core\html\attr;
trait Data{
    public function setData($value){
        return $this->appendAttribut([Attr::DATA => $value]);
    }
}