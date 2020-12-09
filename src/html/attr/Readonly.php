<?php
namespace tekki\core\html\attr;
trait Readonly{
    public function setReadonly(){
        return $this->appendAttribut([Attr::READONLY => null]);
    }
}