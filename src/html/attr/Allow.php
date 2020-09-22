<?php
namespace tekki\core\html\attr;
trait Allow{
    public function setAllow(string $value){
        $this->appendAttribut([Attr::ALLOW => $value]);
    }
}