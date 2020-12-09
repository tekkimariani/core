<?php
namespace tekki\core\html\attr;
trait Value{
    public function setValue(string $value){
        return $this->appendAttribut([Attr::VALUE => $value]);
    }
}