<?php
namespace tekki\core\html\attr;
trait Controls{
    public function setControls(){
        return $this->appendAttribut([Attr::CONTROLS => null]);
    }
}