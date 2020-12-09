<?php
namespace tekki\core\html\attr;
trait Abbr{
    public function setAbbr($value){
        return $this->appendAttribut([Attr::ABBR => $value]);
    }
}