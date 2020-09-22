<?php
namespace tekki\core\html\attr;
trait Label{
    public function setLabel($label){
        $this->appendAttribut([Attr::LABEL => $label]);
    }
}