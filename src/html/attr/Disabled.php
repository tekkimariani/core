<?php
namespace tekki\core\html\attr;
trait Disabled{
    public function setDisabled(){
        $this->appendAttribut([Attr::DISABLED => null]);
    }
}