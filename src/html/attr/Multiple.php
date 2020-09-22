<?php
namespace tekki\core\html\attr;
trait Multiple{
    public function setMultiple(){
        $this->appendAttribut([Attr::MULTIPLE => null]);
    }
}