<?php
namespace tekki\core\html\attr;
trait Alt{
    public function setAlt($alt){
        return $this->appendAttribut([Attr::ALT => $alt]);
    }
}