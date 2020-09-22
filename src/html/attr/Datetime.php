<?php
namespace tekki\core\html\attr;
trait Datetime{
    public function setDatetime(string $value){
        $this->appendAttribut([Attr::DATETIME => $value]);
    }
}