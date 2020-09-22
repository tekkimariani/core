<?php
namespace tekki\core\html\attr;
trait Acceptcharset{
    public function setAcceptcharset(string $value){
        $this->appendAttribut([Attr::ACCEPT_CHARSET => $value]);
    }
}