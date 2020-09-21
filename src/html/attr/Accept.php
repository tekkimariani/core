<?php
namespace tekki\core\html\attr;
trait Src{
    public function setAccept(string $value){
        $this->appendAttribut([Attr::ACCEPT => $value]);
    }
}