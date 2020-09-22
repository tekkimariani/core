<?php
namespace tekki\core\html\attr;
trait Autofocus{
    public function setAutofocus(){
        $this->appendAttribut([Attr::AUTOFOCUS => null]);
    }
}