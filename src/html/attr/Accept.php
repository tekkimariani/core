<?php
namespace tekki\core\html\attr;
trait Accept{
    public function setAccept(string $value){
        return $this->appendAttribut([Attr::ACCEPT => $value]);
    }
}