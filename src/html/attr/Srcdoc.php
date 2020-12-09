<?php
namespace tekki\core\html\attr;
trait Srcdoc{
    public function setSrcdoc(string $value){
        return $this->appendAttribut([Attr::SRCDOC => $value]);
    }
}