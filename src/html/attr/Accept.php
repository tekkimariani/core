<?php
namespace tekki\core\html\attr;
trait Accept{
    public function setAccept(string $value){
        $this->appendAttribut([Attr::ACCEPT => $value]);
    }
}