<?php
namespace tekki\core\html\attr;
trait Ismap{
    public function setIsmap(){
        $this->appendAttribut([Attr::ISMAP => null]);
    }
}