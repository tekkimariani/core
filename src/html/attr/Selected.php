<?php
namespace tekki\core\html\attr;
trait Selected{
    public function setSelected(){
        $this->appendAttribut([Attr::SELECTED => null]);
    }
}