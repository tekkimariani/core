<?php
namespace tekki\core\html\attr;
trait Abbr{
    public function setAbbr($value){
        $this->appendAttribut([Attr::ABBR => $value]);
    }
}