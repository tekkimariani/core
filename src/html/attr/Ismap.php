<?php
namespace tekki\core\html\attr;
trait Ismap{
    public function setIsmap(){
        return $this->appendAttribut([Attr::ISMAP => null]);
    }
}