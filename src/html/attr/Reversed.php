<?php
namespace tekki\core\html\attr;
trait Reversed{
    public function setReversed(){
        return $this->appendAttribut([Attr::REVERSED => null]);
    }
}