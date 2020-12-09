<?php
namespace tekki\core\html\attr;
trait Multiple{
    public function setMultiple(){
        return $this->appendAttribut([Attr::MULTIPLE => null]);
    }
}