<?php
namespace tekki\core\html\attr;
trait Readonly{
    public function setReadonly(){
        $this->appendAttribut([Attr::READONLY => null]);
    }
}