<?php
namespace tekki\core\html\attr;
trait Label{
    public function setLabel($label){
        return $this->appendAttribut([Attr::LABEL => $label]);
    }
}