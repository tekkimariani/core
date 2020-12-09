<?php
namespace tekki\core\html\attr;
trait Colspan{
    public function setColspan($number){
        return $this->appendAttribut([Attr::COLSPAN => $number]);
    }
}