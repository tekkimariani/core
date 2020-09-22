<?php
namespace tekki\core\html\attr;
trait Reversed{
    public function setReversed(){
        $this->appendAttribut([Attr::REVERSED => null]);
    }
}