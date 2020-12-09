<?php
namespace tekki\core\html\attr;
trait Disabled{
    public function setDisabled(){
        return $this->appendAttribut([Attr::DISABLED => null]);
    }
}