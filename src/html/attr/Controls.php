<?php
namespace tekki\core\html\attr;
trait Controls{
    public function setControls(){
        $this->appendAttribut([Attr::CONTROLS => null]);
    }
}