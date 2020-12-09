<?php
namespace tekki\core\html\attr;
trait Datetime{
    public function setDatetime(string $value){
        return $this->appendAttribut([Attr::DATETIME => $value]);
    }
}