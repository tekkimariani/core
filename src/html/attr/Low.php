<?php
namespace tekki\core\html\attr;
trait Low{
    public function setLow($value){
        return $this->appendAttribut([Attr::LOW => $value]);
    }
}