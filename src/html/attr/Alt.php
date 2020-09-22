<?php
namespace tekki\core\html\attr;
trait Alt{
    public function setAlt($alt){
        $this->appendAttribut([Attr::ALT => $alt]);
    }
}