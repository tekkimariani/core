<?php
namespace tekki\core\html\attr;
trait _Default{
    public function setDefault(){
        return $this->appendAttribut([Attr::DEFAULT => null]);
    }
}