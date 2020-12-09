<?php
namespace tekki\core\html\attr;
trait Selected{
    public function setSelected(){
        return $this->appendAttribut([Attr::SELECTED => null]);
    }
}