<?php
namespace tekki\core\html\attr;
trait _Default{
    public function setDefault(){
        $this->appendAttribut([Attr::DEFAULT => null]);
    }
}