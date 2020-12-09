<?php
namespace tekki\core\html\attr;
trait Autofocus{
    public function setAutofocus(){
        return $this->appendAttribut([Attr::AUTOFOCUS => null]);
    }
}