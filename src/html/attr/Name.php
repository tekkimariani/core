<?php
namespace tekki\core\html\attr;
trait Name{
    public function setName(string $name){
        $this->appendAttribut([Attr::NAME => $name]);
    }
}