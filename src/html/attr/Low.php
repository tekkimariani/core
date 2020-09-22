<?php
namespace tekki\core\html\attr;
trait Low{
    public function setLow($value){
        $this->appendAttribut([Attr::LOW => $value]);
    }
}